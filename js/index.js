import moment from 'moment'
import 'moment/locale/pt-br'

const URL_API = 'https://alpha.cnnbrasil.com.br/wp-json/wp/v2/recruitment-posts'

const postTemplate = document.querySelector('#post-template')
const postList = document.querySelector("[data-js='posts-list']")

async function getApiPosts() {
  try {
    const response = await fetch(URL_API)

    if (!response.ok) {
      throw new Error('Um erro foi encontrado, por favor atualize a página')
    }

    const data = await response.json()

    showPosts(data)
  } catch (error) {
    console.log('Error: ', error)
  }
}

function showPosts(posts) {
  Object.entries(posts).forEach((post) => {
    postTemplate.content.querySelector('.post-title').innerHTML =
      post[1].post_title

    postTemplate.content.querySelector('.post-resume').innerHTML =
      post[1].post_excerpt

    post[1].post_authors.forEach((author) => {
      postTemplate.content.querySelector('.post-author__avatar').src =
        author.author_img.thumbnail[0]

      postTemplate.content.querySelector('.post-author__avatar').alt =
        author.author_name

      postTemplate.content.querySelector('.post-author__name').innerHTML =
        author.author_name
    })

    postTemplate.content.querySelector('.post-author__post-date').innerHTML =
      moment(post[1].post_modified).format('LLL')

    if (post[1].featured_images !== null) {
      postTemplate.content.querySelector('.post-image').src =
        post[1].featured_images.full

      postTemplate.content.querySelector('.post-image').alt = post[1].post_title
    }

    postTemplate.content.querySelector('.post-button').href = post[1].guid

    const clone = document.importNode(postTemplate.content, true)
    postList.appendChild(clone)
  })
}

getApiPosts()
