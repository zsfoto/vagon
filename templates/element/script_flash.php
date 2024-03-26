		const flashMessage = (title, text, status) => {
			text = text.replace(/&lt;/g, "<");
			text = text.replace(/&gt;/g, ">");
			new Notify({
				status: status,
				title: title,
				text: text,
				effect: 'slide',
				speed: 800,
				customClass: '',
				customIcon: '',
				showIcon: true,
				showCloseButton: true,
				autoclose: true,
				autotimeout: 10000,
				notificationsGap: null,
				notificationsPadding: null,
				position: 'bottom left',
				type: 'outline',	// outline, filled
				customWrapper: ''
			})
		}		
