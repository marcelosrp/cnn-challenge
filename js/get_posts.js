import moment from 'moment'
import 'moment/locale/pt-br'
import { URL_API } from './api'

const Posts = {
  postTemplate: document.querySelector('#post-template'),
  postList: document.querySelector("[data-js='posts-list']"),
  loadingSpinner: document.querySelector("[data-js='loading']"),

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
    }
  },

  showPosts(posts) {
    Object.entries(posts).forEach((post) => {
      this.postTemplate.content.querySelector(
        "[data-js='post-title']"
      ).innerHTML = post[1].post_title

      this.postTemplate.content.querySelector(
        "[data-js='post-resume']"
      ).innerHTML = post[1].post_excerpt

      this.postTemplate.content.querySelector(
        "[data-js='post-publish-data']"
      ).innerHTML = moment(post[1].post_modified).format('LLL')

      this.postTemplate.content.querySelector("[data-js='post-button']").href =
        post[1].guid

      post[1].post_authors.forEach((author) => {
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

      if (post[1].featured_images !== null) {
        const postImage = this.postTemplate.content.querySelector(
          "[data-js='post-image']"
        )

        postImage.src = post[1].featured_images.full
        postImage.alt = post[1].post_title
      }

      const clone = document.importNode(this.postTemplate.content, true)
      this.postList.appendChild(clone)
    })
  }
}

Posts.getApiPosts()
