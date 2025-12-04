
	// chat aliases
	var you = 'You';
	var robot = 'Nancy EHLEN';
	
	// slow reply by 400 to 800 ms
	var delayStart = 400;
	var delayEnd = 800;
	
	// initialize
	var bot = new chatBot();
	var chat = $('.chat');
	var waiting = 0;
	$('.busy').text(robot + ' is typing...');
	
	// submit user input and get chat-bot's reply
	var submitChat = function() {
	
		var input = $('.input #bottom_input').val();
		if(input == '') return;
		
		$('.input #bottom_input').val('');
		updateChat(you, input);
		
		var reply = bot.respondTo(input);
		if(reply == null) return;
		
		var latency = Math.floor((Math.random() * (delayEnd - delayStart)) + delayStart);
		$('.busy').css('display', 'block');
		waiting++;
		setTimeout( function() {
			if(typeof reply === 'string') {
				updateChat(robot, reply);
			} else {
				for(var r in reply) {
					updateChat(robot, reply[r]);
				}
			}
			if(--waiting == 0) $('.busy').css('display', 'none');
		}, latency);
	}
	
	// add a new line to the chat
	var updateChat = function(party, text) {
	
		var style = 'you';
		if(party != you) {
			style = 'other';
		}
		
		var line = $('<div><span class="party"></span> <span class="text"></span></div>');
		line.find('.party').addClass(style).html(party + ':');
		line.find('.text').html(text);
		
		chat.append(line);
		
		chat.stop().animate({ scrollTop: chat.prop("scrollHeight")});
	
	}
	
	// event binding
	$('.input').bind('keydown', function(e) {
		if(e.keyCode == 13) {
			submitChat();
		}
	});
	$('.input a').bind('click', submitChat);
	
	// initial chat state
	var link = 'What type of property you are finding? <br><a href="javascript:;" id="openHouse" class="mdc-button">Open House Properties</a><br> <a href="javascript:;" id="residentialProp" class="mdc-button">Residential Properties</a>';
	updateChat(robot, '<p>Hi, Welcome to Nancy EHLEN, how can i help you?</p>'+link);

	var openHouse = function() {
		var open_house_link = '<a onclick="clickOnProperty(this)" href="javascript:;" data-url="'+houseUrl1+'" class="mdc-button prop_class">South Tampa Open Houses</a><br>';
			open_house_link += '<a onclick="clickOnProperty(this)" href="javascript:;" data-url="'+houseUrl2+'" class="mdc-button prop_class">St Pete Beach Open Houses</a><br>';
		 	open_house_link += '<a onclick="clickOnProperty(this)" href="javascript:;" data-url="'+houseUrl3+'" class="mdc-button prop_class">Clearwater Open Houses</a><br>';
		 	open_house_link += '<a onclick="clickOnProperty(this)" href="javascript:;" data-url="'+houseUrl4+'" class="mdc-button prop_class">Tampa Open Houses</a><br>';
		 	open_house_link += '<a onclick="clickOnProperty(this)" href="javascript:;" data-url="'+houseUrl5+'" class="mdc-button prop_class">Palm Harbor Open Houses</a>';
		updateChat(robot, open_house_link);
	}
	$('#openHouse').bind('click', openHouse);

	var residentialProp = function() {
		var residential_link = '<br><a onclick="clickOnProperty(this)" href="javascript:;" data-url="'+residence1+'" class="mdc-button prop_class">South Tampa</a><br>';
			residential_link += '<a onclick="clickOnProperty(this)" href="javascript:;" data-url="'+residence2+'" class="mdc-button prop_class">St Pete Beach</a><br>';
			residential_link += '<a onclick="clickOnProperty(this)" href="javascript:;" data-url="'+residence3+'" class="mdc-button prop_class">Clearwater</a><br>';
			residential_link += '<a onclick="clickOnProperty(this)" href="javascript:;" data-url="'+residence4+'" class="mdc-button prop_class">Tampa</a><br>';
			residential_link += '<a onclick="clickOnProperty(this)" href="javascript:;" data-url="'+residence5+'" class="mdc-button prop_class">Palm Harbor</a>';
		updateChat(robot, residential_link);
	}

	$('#residentialProp').bind('click', residentialProp);


	var clickOnProperty = function(a) {
		var data_url = $(a).data('url');
		var data_name = $(a).text();
		var html = '<input type="hidden" value="'+data_url+'" id="chat_message"><input type="hidden" value="'+data_name+'" id="link_text">';
		updateChat(robot, html+'<br><div class="row input chat-bot-div"><input id="chat_name" class="chat-bot-input" type="text" placeholder="Type your name" /><button class="chat-bot-button" id="name_botton" onclick="submit_chat_name()">Submit</button></div>');
	}

	var submit_chat_name = function(a) {
		var name = $('#chat_name').val();
		if(name == ''){
			return false;
		}
		$('#name_botton').hide();
		$('#chat_name').attr('readonly','readonly');
		updateChat(robot, '<div class="row input chat-bot-div"><input id="chat_email" class="chat-bot-input" type="email" placeholder="Type your email" /><button class="chat-bot-button" id="email_botton" onclick="submit_chat_email()">Submit</button></div>');
	}

	var submit_chat_email = function(a) {
		var email = $('#chat_email').val();
		if(!validateEmail(email)){
			return false;
		}
		$('#email_botton').hide();
		$('#chat_email').attr('readonly','readonly');
		updateChat(robot, '<div class="row input chat-bot-div"><input id="chat_phone" class="chat-bot-input" type="text" placeholder="Type your contact number" /><button class="chat-bot-button" id="phone_botton" onclick="submit_chat_phone()">Submit</button></div>');
	}

	function validateEmail($email) {
	  	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	  	return emailReg.test( $email );
	}
	
	var submit_chat_phone = function(a) {
		var chat_phone = $('#chat_phone').val();
		if(chat_phone==''){
			return false;
		}
		$('#phone_botton').hide();
		$('#chat_phone').attr('readonly','readonly');
		submitForm();
	}

	var submitForm = function() {
		var text = $('#link_text').val();
		var url = $('#chat_message').val();
		var message = 'I want to search property in '+text+' URL: '+ url;
		var name = $('#chat_name').val();
		var phone = $('#chat_phone').val();
		var email = $('#chat_email').val();
		var route_name = $('#route_name').val();
		var route_url = $('#route_url').val();
		console.log(message+" "+name+" "+phone+" "+email);
		$.ajax({
            url: '/add-contact',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                'message': message,
                'name': name,
                'phone': phone,
                'email': email,
                'route_url': route_url,
                'route_name': route_name
            },
            beforeSend: function() {
                // $("button[data-name='"+name+"']").html('<i class="fas fa-spinner fa-spin"></i>');
            },
            success: function (response) {
                if(response=='success'){                    
                    
                }
            },
            error: function (error) {
                console.log(error.status);
            },
        });
        updateChat(robot, '<br>Thank you for providing your information, we will connect you shortly. Meanwhile you can see the available properties by clicking <a target="_blank" class="mdc-button" href="'+url+'">Click here</a>');
	}