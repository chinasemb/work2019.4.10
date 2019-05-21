module.exports = {
  title: 'VuePress Blog',
  description: 'VuePress Blog 的网站描述',
  // 其它配置
  themeConfig: {
    navbar: true,
    search: true,
    searchMaxSuggestions: 10,
    sidebar: 'auto',
    lastUpdated: '最后更新时间',
    repo: 'https://github.com/chinasemb/ChaoZhang',
    editLinks: true,
    editLinkText: '编辑此页',
    repoLabel: 'Github',
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
      ] },
      { text: '微信小程序', items: [
        { text: '小程序一', link: '/XCX/Xcx1/' },
        { text: '小程序二', link: '/XCX/Xcx2/' },
        { text: '小程序三', link: '/XCX/Xcx3/' },
      ] },
      { text: 'javascript设计模式', items: [
        { text: '设计模式一', link: '/javascript设计模式/SJMS1/' },
        { text: '设计模式二', link: '/javascript设计模式/SJMS2/' },
        { text: '设计模式三', link: '/javascript设计模式/SJMS3/' },
      ]}
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
                '/Vue/VueX/VueX.md',
                '/Vue/Vue-Router/Vue-Router.md',
            ]
        },
        {
          title: '微信小程序',
          collapsable: false,
          children: [
            '/XCX/Xcx1/',
            '/XCX/Xcx2/',
            '/XCX/Xcx3/'
          ]
        },
        {
          title: 'javascript设计模式',
          collapsable: false,
          children: [
            '/javascript设计模式/SJMS1/',
            '/javascript设计模式/SJMS2/',
            '/javascript设计模式/SJMS3/'
          ]
        }
    ]
  }
}