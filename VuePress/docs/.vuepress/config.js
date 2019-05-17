module.exports = {
  // 其它配置
  themeConfig: {
    navbar: true,
    search: true,
    searchMaxSuggestions: 10,
    sidebar: 'auto',
    nav: [
      { text: '首页', link: '/' },
      { text: '前端三剑客', items: [
        { text: 'HTML', link: '/HTML/' },
        { text: 'CSS', link: '/CSS/' },
        { text: 'JavaScript', link: '/JavaScript/' }
      ] }
    ],
    sidebar: [
        {
            title: '前端三剑客',
            collapsable: false,
            children: [
                '/CSS/',
                '/HTML/',
                '/JavaScript/',
            ]
        },
        {
            title: 'Vue.js',
            collapsable: false,
            children: [
                '/Vue/',
                '/Vue/Vuex.md',
                '/Vue/Vue-Router.md',
            ]
        },
    ]
  }
}