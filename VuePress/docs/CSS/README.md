# CSS

::: tip 提醒
这里是tip容器 CSS
:::

::: warning 警告
这里是警告容器 CSS
:::

::: danger 危险
这里是危险容器 CSS
:::




<style>
.box {
  width: 100%;
  height: 100px;
  line-height: 100px;
  text-align: center;
  color: #fff;
  background-color: #58a;
}
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

