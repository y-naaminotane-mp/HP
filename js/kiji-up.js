// JavaScript Document
//カテゴリ選択式のファンクション
function SelectCate(no, no_s, catedai, counting){
//取得データはカテゴリNO（配列）、カテゴリNO（セッション）、カテゴリ名、配列の数	
//初めのフォーム記述部分
	document.write('<fieldset><legend>大カテゴリ入力(選択式)</legend><label><select name="cate_no" size="6" onclick="SelectCate_s">');
	document.write('<select name="cate_no" size="6" canchang="">');
	for(var i=0; i<=counting; i++){
		//カテゴリを挿入していく、セッションがあればそれが選択される
		if(no[i] = no_s){
			document.write('<option value=\"no[i]\" selected>catedai[i]</option>');
		}else{
			document.write('<option value=\"no[i]\">catedai[i]</option>');
		}
		
	}
	document.write('</select></label></fieldset>');

}

function SelectCate_s(s_no, s_no_s, cateshou, counting){
	//取得データは小カテゴリNO（配列）、小カテゴリ（配列）、小カテゴリ名、配列の数
	document.write('<fieldset><legend>大カテゴリ入力(選択式)</legend><label><select name="cate_no" size="6" onclick="">');
	document.write('<select name="cate_s_no" size="6" canchang="">');
		for(var i=0; i<=counting; i++){
		//カテゴリを挿入していく、セッションがあればそれが選択される
		if(no[i] = s_no_s){
			document.write('<option value=\"s_no[i]\" selected>cateshou[i]</option>');
		}else{
			document.write('<option value=\"s_no[i]\">cateshou[i]</option>');
		}
		
	}
	document.write('</select></label></fieldset>');
}