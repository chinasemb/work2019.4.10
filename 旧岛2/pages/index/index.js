//index.js
//获取应用实例
const app = getApp()

Page({
  data: {
    // 组件所需的参数
    nvabarData: {
      showCapsule: 1,
      title: '我的主页', 
    },

    // 此页面 页面内容距最顶部的距离
    height: app.globalData.height * 2 + 20,
  },
  onLoad() {
    console.log(this.data.height)
  }
})