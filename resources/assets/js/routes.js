import Tag from './components/admin/TagComponent.vue'
import Post from './components/admin/PostComponent.vue'

export const routes = [
    { 
      path: '/postCategory',
       component: Tag 
      },
    { 
      path: '/post', 
      component: Post
    }
  ]