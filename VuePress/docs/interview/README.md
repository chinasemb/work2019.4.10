# This is Viper

::: tip 提醒
这里是tip容器 This is Viper
:::

::: warning 警告
这里是警告容器 This is Viper
:::

::: danger 危险
这里是危险容器 This is Viper
:::


<style lang="stylus">
.box
  width: 100%
  height: 100px
  line-height: 100px
  text-align: center
  color: #fff
  background-color: #fb3
</style>
#### 使用原生的JS和CSS
<div id="container"></div>

<script>
window.onload = function() {
  var dom = document.getElementById('container');
  dom.innerHTML = 'box content'
  dom.className = 'box'
}
</script>

[百度一下](https://www.baidu.com)

#### Vue <Badge text="2.5.0+"/> 
#### Vuex <Badge text="beta" type="warn" vertical="top"/> 
#### Vue-Resource<Badge text="废弃" vertical="middle" type="error"/>