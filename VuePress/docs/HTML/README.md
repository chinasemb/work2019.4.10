# HTML

::: tip 提醒
这里是tip容器 HTML
:::
``` html{1}
<div class="box">html类型的代码块</html>
```
``` css {2}
.box {
  width: 100px;
  height: 100px;
}
``` 
::: warning 警告
这里是警告容器 HTML
:pencil2:
:wheelchair:
:::

::: danger 危险
这里是危险容器 HTML
:::

| 序号          | 订单编号      | 订单金额|
| -------------|:-------------:| ------:|
| 1             | 20180101     | $1600  |
| 2             | 20180102     |   $12  |
| 3             | 20180103     |    $1  |

[[toc]]
# H1标题

## h2标题
### h3标题
### h3标题

## h2标题
### h3标题
### h3标题
# 插值表达式
1 + 1 的结果是 {{1+1}}



#### 使用原生的JS和CSS
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
<div id="container"></div>

<script>
window.onload = function() {
  var dom = document.getElementById('container');
  dom.innerHTML = 'box content'
  dom.className = 'box'
}
</script>
