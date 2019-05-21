# 设计模式一
# JavaScript 设计模式与开发实践

# 基础知识
[[toc]]


##  面向对象的javascript
::: tip 提醒
编程语言按照数据类型答题分为两类：**静态类型的语言**和**动态类型的语言**
:::
### 静态类型语言的优点缺点和定义
*定义*： 编译时候，就做数据类型检查的语言，写程序的时候就要声明所有变量的数据类型，是固定的。
*典型*： C C++ C# JAVA
**优点**：
- 根据数据类型的不同，*进行有针对的优化*，**提高程序的执行速度**
---
**缺点**
- **从开始**为每一个*变量*规定数据类型
- *类型声明*要求写更多的发i吗，容易分散逻辑上的精力到这些细节上

### 动态类型语言的优点缺点和定义
**优点**：
-  *定义*： 运行期间才做数据类型检查的语言永远不会给任何变量指定数据类型。该语言会在第一次赋值给变量时，*在内部*将数据类型记录下来
- *典型*： Python Ruby Php ECMAScript VBScript
- 编写的代码少，简洁，把更多的精力放到业务逻辑上
---
**缺点**
- 无法保证变量的类型，在程序运行期间

## 鸭子类型
::: tip 鸭子
如果它走起路来像鸭子，发出的声音像鸭子，我们就称之为鸭子。鸭子类型知道我们只关注**对象的行为**，而不关注**对象本身**
:::
``` js
//鸭子类型
var duck = {
    duckSinging: function() {
        console.log('嘎嘎嘎')
    }
}
var chicken = {
    duckSinging : function() {
        console.log('嘎嘎嘎')
    }
}
var choir = [];
var joinChoir = function (animal){
    if(animal && typeof animal.duckSinging === 'function') {
        choir.push(animal);
        console.log('恭喜加入合唱团')
    }
}
joinChoir(duck);//恭喜加入合唱团
joinChoir(chicken);//恭喜加入合唱团

```
## 多态
::: tip 多态
- 多态的含义是：*同一操作*作用于*不同的对象*，可以有不同的解释，产生不同的执行结果，这就是多态性。
- 为什么要用多态： 封装可以隐藏实现细节，使得代码模块化。继承可以扩展已存在的代码块，他们的目的都是为了代码的重用。
- 而多态出了代码的重用，还可以解决项目中紧耦合的问题，提高程序的可扩展性。
- 耦合度是模块和模块之间，代码和代码之间的关联度，通过对系统的分析把他分解成一个一个的子模块，子模块提供稳定的接口，达到降低系统耦合度的目的模块和模块之间尽量使用模块接口访问，而不是随意的引用其他模块的成员变量。
:::
``` js
//多态
var makeSound = function (animal) {
    animal.sound();
}
var Duck = function (){}；
Duck.prototype.sound= function () {
    console.log('嘎嘎嘎')
}
var Chicken = function () {};
Chicken.prototype.sound = function () {
    console.log('咯咯咯')
}
makeSound(new Duck()); //嘎嘎嘎
makeSound(new Chicken());//咯咯咯
var Dog = function () {};
Dog.prototype.sound = function () {
    console.log('呸呸呸')
}
makeSound(new Dog())//呸呸呸

```