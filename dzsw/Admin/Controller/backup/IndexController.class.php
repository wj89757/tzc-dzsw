<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $value = cookie('user');
        // 判断用户是否登陆
        if($value){
            $this->assign('username', $value);
            $user = M('User');
            $condition['name'] = $value;
            $address = $user->where($condition)->getField('address');
            $senior = $user->where($condition)->getField('senior');
            $personal = $user->where($condition)->getField('personal');
            $date = $user->where($condition)->getField('date');
            $this->assign('address',$address);
            $this->assign('senior',$senior);
            $this->assign('date',$date);
            $this->assign('personal',$personal);
        }else{
            $this->error('您尚未登录！',U('Index/Index/index'));
        }

        $this->show();
    }
    public function addprofile(){
        $value = cookie('user');
        // 判断用户是否登陆
        if($value){
            $this->assign('username', $value);
        }else{
            $this->error('您尚未登录！',U('Index/Index/index'));
        }
        $user = M('User');
        $condition['name'] = $value;
        $isalter = $user->where($condition)->getField('isalter');
        $address = $user->where($condition)->getField('address');
        $senior = $user->where($condition)->getField('senior');
        $personal = $user->where($condition)->getField('personal');
        $this->assign('isalter',$isalter);
        $this->assign('address',$address);
        $this->assign('senior',$senior);
        if($personal){
            $this->assign('personal',$personal);    
        }else{
            $content = "暂无内容";
            $this->assign('personal',$content);
        }

        $this->show();
    }
    public function add(){
        $value = cookie('user');
        $user = M('User');
        $map['name'] = $value;
        $data['address'] = $_POST['address'];
        $data['senior'] = $_POST['senior'];
        $data['personal'] = $_POST['personal'];
        $data['isalter'] = 1;
        $result = $user->where($map)->save($data);
        $this->ajaxReturn($result);
    }   

    /*修改个人资料*/
    public function fixprofile(){
        $value = cookie('user');
        // 判断用户是否登陆
        if($value){
            $this->assign('username', $value);
        }else{
            $this->error('您尚未登录！',U('Index/Index/index'));
        }
        $user = M('User');
        $condition['name'] = $value;
        $password = $user->where($condition)->getField('password');
        $this->assign('password',$password);
        $this->show();
    }
    public function fix(){
        $user = M('User');
        $data['password'] = sha1($_POST['password']);
        $map['name'] = cookie('user');
        $result = $user->where($map)->save($data);
        // echo $result;
        $this->ajaxReturn($result);
    }
    
    /*上传日记*/
    public function dzswdiary(){
        $value = cookie('user');
        // 判断用户是否登陆
        if($value){
            $this->assign('username', $value);
        }else{
            $this->error('您尚未登录！',U('Index/Index/index'));
        }
        $this->show();
    }
    /***上传日记功能***/
    public function UploadDiary(){
        $diraylog = M('Diraylog');
        $diraylog->name = $_POST['user'];
        $diraylog->title = $_POST['title'];
        $diraylog->content = $_POST['content'];
        $diraylog->time = date('Y-m-d H:i:s');
        $result = $diraylog->add();
        $this->ajaxReturn($result);
    }
    /*下载日记*/
    public function downloaddiary(){
        $value = cookie('user');
        // 判断用户是否登陆
        if($value){
            $this->assign('username', $value);
        }else{
            $this->error('您尚未登录！',U('Index/Index/index'));
        }
        $diraylog = M('Diraylog');
        $list = $diraylog->field(array('id','name','title','content','time'))->select();
        $this->assign('list', $list);
        $this->show();
    }
    public function download(){
        $value = cookie('user');
        // 判断用户是否登陆
        if($value){
            $this->assign('username', $value);
        }else{
            $this->error('您尚未登录！',U('Index/Index/index'));
        }
        $diraylog = M('Diraylog');
        $condition['id'] = $_POST['diray_id'];
        $diray_content = $diraylog->where($condition)->getField('content');
        $this->ajaxReturn($diray_content);
    }
    public function exportExcel($expTitle,$expCellName,$expTableData){
        $xlsTitle = iconv('utf-8', 'gb2312', $expTitle);//文件名称
        $fileName = $expTitle.date('_YmdHis');//or $xlsTitle 文件名称可根据自己情况设定
        $cellNum = count($expCellName);
        $dataNum = count($expTableData);

        vendor("PHPExcel.PHPExcel");
            
        $objPHPExcel = new \PHPExcel();
        $cellName = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS','AT','AU','AV','AW','AX','AY','AZ');
        //set width  
        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(12);
        $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);   
        $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);    
        $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(20); 
        $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(20);   

        $objPHPExcel->getActiveSheet(0)->mergeCells('A1:'.$cellName[$cellNum-1].'1');//合并单元格
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', $expTitle.'  导出时间:'.date('Y-m-d H:i:s'));
        for($i=0;$i<$cellNum;$i++){
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue($cellName[$i].'2', $expCellName[$i][1]);
        }
        // Miscellaneous glyphs, UTF-8
        for($i=0;$i<$dataNum;$i++){
            for($j=0;$j<$cellNum;$j++){
                $objPHPExcel->getActiveSheet(0)->setCellValue($cellName[$j].($i+3), $expTableData[$i][$expCellName[$j][0]]);
            }
        }

        header('pragma:public');
        header('Content-type:application/vnd.ms-excel;charset=utf-8;name="'.$xlsTitle.'.xls"');
        header("Content-Disposition:attachment;filename=$fileName.xls");//attachment新窗口打印inline本窗口打印
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');
        exit;
    }
    function expnotel(){
        $xlsName  = "贪吃蓝莓君-手机预约未付款表";
        $xlsCell  = array(
            array('tel','手机号码'),
            array('name','姓名'),
            array('childnum','儿童人数'),
            array('totalnum','成人人数'),
            array('aptime','预约时间'),
            array('uptime','提交时间'),
            array('index','预约id')
        );
        $xlsModel = M('Appointment');
        $map['sessiontel'] = 1;
        $map['paymoney'] = 0;
        $xlsData  = $xlsModel->where($map)->Field('tel,name,childnum,totalnum,aptime,uptime,index')->select();
        $this->exportExcel($xlsName,$xlsCell,$xlsData);
    }
    // ==========已删除============= //
    // //---------管理员----------//
    //----权限内容用户管理-----//
    // public function admin_usermanage(){
    //     $value = cookie('user');
    //     // 判断用户是否登陆
    //     if($value){
    //         $this->assign('username', $value);
    //         if($value!='wangjun'){
    //             $this->error('您不是管理员！');
    //         }
    //     }else{
    //         $this->error('您尚未登录！',U('Index/Index/index'));
    //     }
    //     $user = M('User');
    //     $list = $user->field(array('id','name','password','email','address','personal','date','senior'))->select();
    //     $this->assign('list', $list);
    //     $this->show();
    // }
    // public function admin_contentmanage(){
    //     $value = cookie('user');
    //     // 判断用户是否登陆
    //     if($value){
    //         $this->assign('username', $value);
    //         if($value!='wangjun'){
    //             $this->error('您不是管理员！');
    //         }
    //     }else{
    //         $this->error('您尚未登录！',U('Index/Index/index'));
    //     }
    //     $this->show();   
    // }
    // public function admin_update(){
    //     $value = cookie('user');
    //     // 判断用户是否登陆
    //     if($value){
    //         $this->assign('username', $value);
    //         if($value!='wangjun'){
    //             $this->error('您不是管理员！');
    //         }
    //     }else{
    //         $this->error('您尚未登录！',U('Index/Index/index'));
    //     }
    //     $this->show();   
    // }
    // public function admin_updateprofile(){
    //     $value = cookie('user');
    //     // 判断用户是否登陆
    //     if($value){
    //         $this->assign('username', $value);
    //         if($value!='wangjun'){
    //             $this->error('您不是管理员！');
    //         }
    //     }else{
    //         $this->error('您尚未登录！',U('Index/Index/index'));
    //     }
    //     $this->show();         
    // }
    /*本周任务*/
    // public function weektask(){
    //     $value = cookie('user');
    //     // 判断用户是否登陆
    //     if($value){
    //         $this->assign('username', $value);
    //     }else{
    //         $this->error('您尚未登录！',U('Index/Index/index'));
    //     }
    //     $this->show();
    // }
    /*团队动态*/
    // public function teamtrends(){
    //     $value = cookie('user');
    //     // 判断用户是否登陆
    //     if($value){
    //         $this->assign('username', $value);
    //     }else{
    //         $this->error('您尚未登录！',U('Index/Index/index'));
    //     }
    //     $this->show();
    // }
    /*回复消息*/
    // public function replymessage(){
    //     $value = cookie('user');
    //     // 判断用户是否登陆
    //     if($value){
    //         $this->assign('username', $value);
    //     }else{
    //         $this->error('您尚未登录！',U('Index/Index/index'));
    //     }
    //     $this->show();
    // }
    /*资料更新*/
    // public function dataupdate(){
    //     $value = cookie('user');
    //     // 判断用户是否登陆
    //     if($value){
    //         $this->assign('username', $value);
    //     }else{
    //         $this->error('您尚未登录！',U('Index/Index/index'));
    //     }
    //     $this->show();
    // }
    // public function dzswweek(){
    //     $value = cookie('user');
    //     // 判断用户是否登陆
    //     if($value){
    //         $this->assign('username', $value);
    //     }else{
    //         $this->error('您尚未登录！',U('Index/Index/index'));
    //     }
    //     $this->show();
    // }
    // ===========已删除=========== //
}