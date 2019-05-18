module.exports = {
  // 其它配置
  themeConfig: {
    navbar: true,
    search: true,
    searchMaxSuggestions: 10,
    sidebar: 'auto',
    lastUpdated: '最后更新时间',
    lastUpdated: true,
    nav: [
      { text: '首页', link: '/' },
      { text: '前端三剑客', items: [
        { text: 'HTML', link: '/HTML/' },
        { text: 'CSS', link: '/CSS/' },
        { text: 'JavaScript', link: '/JavaScript/' }
      ] },
      { text: 'Vue.js', items: [
        { text: 'Vue', link: '/Vue/' },
        { text: 'VueX', link: '/Vue/VueX/VueX.md' },
        { text: 'Vue-Router', link: '/Vue/Vue-Router/Vue-Router.md' }
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
                '/Vue/VueX.md',
                '/Vue/Vue-Router.md',
            ]
        },
    ]
  }
}