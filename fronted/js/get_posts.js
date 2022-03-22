import moment from 'moment'
import 'moment/locale/pt-br'
import { URL_API } from './api'

const buttonMaisPosts = document.querySelector("[data-js='button-mais-posts']")

const Posts = {
  postTemplate: document.querySelector('#post-template'),
  postList: document.querySelector("[data-js='posts-list']"),
  loadingSpinner: document.querySelector("[data-js='loading']"),

  init() {
    this.getApiPosts()
  },

  async getApiPosts() {
    try {
      this.loadingSpinner.classList.remove('d-none')
      const response = await fetch(URL_API)

      if (!response.ok) {
        throw new Error(
          'Um erro foi encontrado, por favor atualize a página e tente novamente.'
        )
      }

      const data = await response.json()
      this.showPosts(data)
    } catch (error) {
      const errorTemplate = `
          <div class="error-message">${error.message}</div>
        `
      this.postList.innerHTML = errorTemplate
    } finally {
      this.loadingSpinner.remove()
      buttonMaisPosts.classList.remove('d-none')
    }
  },

  showPosts(posts) {
    const postsArray = Object.values(posts)

    postsArray.forEach((post) => {
      this.postTemplate.content.querySelector(
        "[data-js='post-title']"
      ).innerHTML = post.post_title

      this.postTemplate.content.querySelector(
        "[data-js='post-resume']"
      ).innerHTML = post.post_excerpt

      this.postTemplate.content.querySelector(
        "[data-js='post-publish-data']"
      ).innerHTML = moment(post.post_modified).format('LLL')

      this.postTemplate.content.querySelector("[data-js='post-button']").href =
        post.guid

      post.post_authors.forEach((author) => {
        const postAuthorAvatar = this.postTemplate.content.querySelector(
          "[data-js='post-author-avatar']"
        )

        const postAuthorName = this.postTemplate.content.querySelector(
          "[data-js='post-author-name']"
        )

        postAuthorAvatar.src = author.author_img.thumbnail[0]
        postAuthorAvatar.alt = author.author_name
        postAuthorName.innerHTML = author.author_name
      })

      if (post.featured_images !== null) {
        const postImage = this.postTemplate.content.querySelector(
          "[data-js='post-image']"
        )

        postImage.src = post.featured_images.full
        postImage.alt = post.post_title
      }

      const clone = document.importNode(this.postTemplate.content, true)
      this.postList.appendChild(clone)
    })

    this.filtraPosts()
  },

  filtraPosts() {
    const posts = Array.from(
      document.querySelectorAll('[data-js="content-post"]')
    )

    const limit = 2

    posts.forEach((item, index) => {
      if (index > limit - 1) {
        item.classList.add('d-none')
      }
    })
  },

  loadMorePosts() {
    const posts = document.querySelectorAll('.posts-content__post.d-none')
    const loadPosts = 2

    this.postList.scrollIntoView({ block: 'end', behavior: 'smooth' })

    posts.forEach((item, index) => {
      if (index < loadPosts) {
        item.classList.remove('d-none')
      }

      if (
        document.querySelectorAll('.posts-content__post.d-none').length === 0
      ) {
        buttonMaisPosts.style.display = 'none'
      }
    })
  }
}

Posts.init()

buttonMaisPosts.addEventListener('click', () => {
  Posts.loadMorePosts()
})
