# Shell判断空字符串

### Shell 判断空字符串可以用以下方法
- 使用`test -n "$s"` 测试 `$s` 是不是“非空字符串”
- 使用`test -z "$s"` 测试 `$s` 是不是“空字符串”
- 添加其它字符进行判断

**注意：** 使用 test -n 时要注意双引号的使用。

下面是脚本演示：

```shell
echo right way ----------------

s=
[ -z "$s" ] && echo empty
[ -n "$s" ] && echo not empty

echo -----

s=a
[ -z "$s" ] && echo empty
[ -n "$s" ] && echo not empty

echo bad way ----------------

s=
[ -z $s ] && echo empty
[ -n $s ] && echo not empty '********* not expect'

echo -----

s=a
[ -z $s ] && echo empty
[ -n $s ] && echo not empty

echo another way ----------------

[ .$s = . ] && echo empty
[ .$s != . ] && echo not mepty

[ "$s" = "" ] && echo empty
[ "$s" != "" ] && echo not empty
 # only works in bash, not works in Z Shell
 # [ $s = "" ] && echo empty
 # [ $s != "" ] && echo not empty

 # works in bash and Z Shell
[[ $s = "" ]] && echo empty
[[ $s == "" ]] && echo empty
[[ $s != "" ]] && echo not empty
```
