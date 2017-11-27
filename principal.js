$(document).ready(function(){
	$("#phone").mask("(99) 9 9999-9999");
	$("#date").mask("99/99/9999");
	$("#time").mask("99:99");
	
	$("#formcontato").validate(
	{
		rules:{
			name:{
				required: true,
				minlength: 2
			},
			email:{
				required: true,
				email:true
			},
			phone:{
				required: true,
				
			},
			subject:{
				required: true,
				
			},
			question:{
				required: true,
				minlength: 10
			},
			date:{
				required: true,
			},
			time:{
				required: true,
			}
		},
		messages:{
			name:{
				required: "Por favor informar seu nome",
				minlength: "Seu nome tem menos que 2 letras"
				},
			email:{
				required: "Por favor informar seu E-mail",
				email: "Por favor informe um endereço de E-mail válido"
			},
			phone:{
				required: "Por favor informar seu Telefone",
				
			},
			subject:{
				required: "Por favor informar o assunto",
				
			},
			question:{
				required: "Por favor informar sua dúvida",
				minlength: "Por favor utilize mais de 10 letras "
			},
			date:{
				required: "Por favor informe uma data",
			},
			time:{
				required: "Por favor informe o horário",
			}
		},
		submitHandler: function (form) {
			form.submit();
		}	
	}
	);
	
	$("#formAgendamento").validate(
	{
		rules:{
			name:{
				required: true,
				minlength: 2
			},
			email:{
				required: true,
				email:true
			},
			phone:{
				required: true,
				
			},
			date:{
				required: true,
			},
			time:{
				required: true,
			}
		},
		messages:{
			name:{
				required: "Por favor informar seu nome",
				minlength: "Seu nome tem menos que 2 letras"
			},
			email:{
				required: "Por favor informar seu E-mail",
				email: "Por favor informe um endereço de E-mail válido"
			},
			phone:{
				required: "Por favor informar seu Telefone",
				
			},
			date:{
				required: "Por favor informe uma data",
			},
			time:{
				required: "Por favor informe o horário",
			}
		},
		submitHandler: function (form) {
			form.submit();
		}
	}
);
	
	
	
    $( ".datepicker" ).datepicker();
	
});







$(document).ready(function(){
		$("#submitAgendamento").click( function(e){
			//Pausar o envio dos dados para o servidor
			e.preventDefault();
			
			var name = $("#name").val();
			var email = $("#email").val();
			var phone = $("#phone").val();
			var date = $("#date").val();
			var time = $("#time").val();
			
			$.ajax(
				{
					data: {
						name   :name  ,
						email  :email ,
						phone  :phone ,
						date   :date  ,
						time   :time  
					},
					method : "POST",
					dataType : "json",
					url: "server.php", 
					success: function(result){
						console.log(result);
						//Concatenei string pra construir uma mensagem
						var message = '<div class="alert alert-'+ result.tipo +'">' + result.mensagem + '</div>';
						//enviei a mensagem para o local
						$("#mensagemResultado").html(message);					
					}
				}
			);
			
			return false;
			
		});
		
		$("#submitContato").click( function(e){
			//Pausar o envio dos dados para o servidor
			e.preventDefault();
			
			var name = $("#name").val();
			var email = $("#email").val();
			var phone = $("#phone").val();
			var subject = $("#subject").val();
			var question = $("#question").val();
			
			$.ajax(
				{
					data: {
						name     :name  ,
						email    :email ,
						phone    :phone ,
						subject  :subject,
						question :question 
					},
					method : "POST",
					dataType : "json",
					url: "server.php", 
					success: function(result){
						console.log(result);
						//Concatenei string pra construir uma mensagem
						var message = '<div class="alert alert-'+ result.tipo +'">' + result.mensagem + '</div>';
						//enviei a mensagem para o local
						$("#mensagemResultado").html(message);					
					}
				}
			);
			
			return false;
			
		})
	});

$("document").ready(function(event){
		var address =localStorage.getItem("address");
		var phone =localStorage.getItem("phone");
		var time =localStorage.getItem("time");
		$("#address").html(address);
		$("#phone").html(phone);
		$("#time").html(time);
});