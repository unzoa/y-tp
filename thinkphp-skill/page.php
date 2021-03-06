// 分页显示
$news = D('news');
$count = $news->count();// 查询满足要求的总记录数
$Page = new \Think\Page($count,4);// 实例化分页类 传入总记录数和每页显示的记录数(4)
$show = $Page->show();// 分页显示输出

// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
$info = $news->where('')->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
$this->assign('info',$info);// 赋值数据集
$this->assign('show',$show);// 赋值分页输出

// {$show}------html

// 分页用户
$news = M('student')->where('type=1');
$count = $news->count();// 查询满足要求的总记录数
$Page = new \Think\Page($count,1);// 实例化分页类 传入总记录数和每页显示的记录数(4)
$this->show = $Page->show();// 分页显示输出

// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
$this->info = $news->where('type=1')->limit($Page->firstRow.','.$Page->listRows)->select();