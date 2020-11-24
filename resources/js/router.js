import Router from 'vue-router'
import Top from './components/top'
import About from './components/about'
import Works from './components/works'
import Contact from './components/contact'
import NotFound from './components/NotFound.vue'

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '*',
      component: NotFound
    },   
    {
      path: '/',
      name: 'top',
      component: Top
    },
    {
      path: '/about',
      name: 'about',
      component: About
    },
    {
      path: '/works',
      name: 'works',
      component: Works
    },
    {
      path: '/contact',
      name: 'contact',
      component: Contact
    },
  ]
});