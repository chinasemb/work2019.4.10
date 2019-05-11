//components/like/index.js

Component({
  /**
   * 组件的属性列表
   */
  properties: {
    like: {
      type: Boolean,
    },
    count: {
      type: Number
    }
  },
  /**
   * 组件的初始数据
   */
  data: {
    yesSrc: "images/like.png",
    noSrc: "images/like@dis.png",
    ripleStyle: "top:' + 0 + 'px;left:' + 0 + 'px;-webkit-animation: ripple 0.4s linear;animation:ripple 0.4s linear;",
  },
  /**
   * 组件的方法列表
   */
  methods: {
    onLike: function(event) {
      let like = this.properties.like
      let count = this.properties.count
      count = like ? count - 1 : count + 1
      this.setData({
        like: !like,
        count: count
      })
      let behavior = this.properties.like ? "like" : "cacle"
      this.triggerEvent("like", {
        behavior: behavior
      }, {})

    },

    containerTap1: function(res) {

      console.log(res.touches[0]);

      var x = res.touches[0].pageX;

      var y = res.touches[0].pageY + 85;

      // this.setData({

      //   rippleStyle: ''

      // });

      this.setData({
        rippleStyle: 'top:' + y + 'px;left:' + x + 'px;-webkit-animation: ripple 0.4s linear;animation:ripple 0.4s linear;'
      });

    }

  }

})