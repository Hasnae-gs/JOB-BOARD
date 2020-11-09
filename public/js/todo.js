$input0=$("#intitule");
$input1=$("#region");
$input2=$("#ville");
$input3=$("#nad");
$input4=$("#niveau");
$input5=$("#langue");

//change par rapport l input0


$input0.change(function(){
    console.log($input0.val());
    var $form=$(this).closest('form');
    var data={input0:$input0.val()};
    $.ajax({
        url: $form.attr('action'),
        type: 'GET',
        data: data,
        success: function(html){
            console.log(data);
        }
    })
});

