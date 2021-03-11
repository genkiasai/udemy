$(function () {
	$("#btnCopy").click(function () {
		// 名前を取得し、コピー
		var name = $("#name").val();
		$("#name2").val(name);
		console.log("名前処理完了");

		// okチェックボックスのチェックを取得し、コピー
		// var ok = $("#ok").val();
		// $("#ok2").val(ok);
		// console.log("okチェックボックス処理完了");

		// チェックボックスのチェックを取得し、コピー
		var check = $("#chck").prop("checked");
		$("#chck2").prop("checked", true);
		console.log("チェックボックス処理完了");

		// ラジオボタンのチェック確認
		// var radio = ("input[name=sex]").each(function(){
		// 	var value = $(this).value;
		// 	var check = $(this).prop("checked");
		// 	if ((value == "male") && (check == true)) {

		// 	};
		// });

		// var radio1 = $("input[name=sex]:checked").prop("value");
		// var radio2 = $("input[name=sex]:checked").val();
		// $("input[name=sex2]").prop("checked", [radio1]);
		// // $("input[name=sex2]").val([radio1]);
		// // $("input[name=sex2]").prop("value", [radio2]);
		// console.log("radio1", radio1);
		// console.log("radio2", radio2);

		// var radio = $("input[name=sex]:checked").eq();
		// $(`input[name=sex2]:eq(${radio})`).prop("checked", true);
		// console.log(radio);

		// var radio = $("input[name=sex]:checked").index();
		// console.log(radio);

		var radio = $("input[name=sex]:checked").val();
		$("input[name=sex2]").val([radio]);
		console.log("ラジオボタン処理完了", radio);
		
		// 選択されているリストを取得し、コピー
		var list = $("#lst:selected").prop("value");
		console.log(list);
	});


	
});