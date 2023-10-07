<?php
$nameLead = "Aldahir D";
$sitioWeb = "https://engranetmx.com/";
$urlWhatsapp = "https://api.whatsapp.com/send/?phone=522212145723&text=Hola+engranet&type=phone_number&app_absent=0";
$urlAgedarCita="https://engranetmx.com/index.php?view=recepcion";
$mailSuscripcion = '
	<table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
		<tr>
			<td align="center" style="padding:0;">
				<table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
					<tr>
						<td align="center" style="padding:40px 0 30px 0;">
							<img src="https://engranetmx.com/BackWeb/assets/img/fondo.jpg" alt="" width="90%"  style="height:auto;display:block;" />
						</td>
					</tr>
					<tr>
						<td style="padding:36px 30px 42px 30px;">
							<table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
								<tr>
									<td style="padding:0 0 36px 0;color:#153643;">
										<span>Hola ' .$nameLead. '.</span>
										<h1 style="font-size:24px;margin:0 0 5px 0;font-family:Arial,sans-serif;">Tu registro fue exitoso.</h1>
										<span>Muchas gracias por compartirnos tus datos. </span>
										<h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;"></h1>
										<p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">
										Un asesor te contactará tan pronto le sea posible para atender cualquier duda que tengas. De igual forma nuestro bot te enviará un mensaje vía Whatsapp para agendar una posible llamada. ﻿Adjuntamos sobre este email una presentación sobre nuestros servicios.
										</p>
										<p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><a href="'.$sitioWeb.'" target="_blank" style="color:#ee4c50;text-decoration:underline;">Visita nuestro sitio web</a></p>
									</td>
								</tr>
								<tr>
									<td style="padding:0;">
										<table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
											<tr>
												<td style="width:260px;padding:0;vertical-align:top;color:#153643;">
													<p style="margin:0 0 25px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><img src="https://assets.codepen.io/210284/left.gif" alt="" width="260" style="height:auto;display:block;" /></p>
													<p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">
													Sabemos que tu tiempo es valioso, por eso te ofrecemos la forma más rápida y cómoda de comunicarte con nosotros por WhatsApp.
													<br>
													¡Esperamos tu mensaje!
													</p>
													<p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><a href="'.$urlWhatsapp.'" target="_blank" style="color:#ee4c50;text-decoration:underline;">Mandar WhatsApp</a></p>
												</td>
												<td style="width:20px;padding:0;font-size:0;line-height:0;">&nbsp;</td>
												<td style="width:260px;padding:0;vertical-align:top;color:#153643;">
													<p style="margin:0 0 25px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><img src="https://assets.codepen.io/210284/right.gif" alt="" width="260" style="height:auto;display:block;" /></p>
													<p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"> Sabemos que tu tiempo es valioso, por lo que te invitamos a agendar una cita con uno de nuestros asesores en línea para que puedas obtener respuestas de manera rápida y personalizada.
													</p>
													<p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><a href="'.$urlAgedarCita.'" target="_blank" style="color:#ee4c50;text-decoration:underline;">Agendar una cita en línea.</a></p>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td style="padding:30px;background:#ee4c50;">
							<table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
								<tr>
									<td style="padding:0;width:50%;" align="left">
										<p style="margin:0;font-size:14px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;">
											&reg; Engranet, Soluciones Digitales 2023<br /><a href="https://www.engranetmx.com" target="_blank" style="color:#ffffff;text-decoration:underline;">engranetmx.com</a>
										</p>
									</td>
									<td style="padding:0;width:50%;" align="right">
										<table role="presentation" style="border-collapse:collapse;border:0;border-spacing:0;">
											<tr>
												<td style="padding:0 0 0 10px;width:38px;">
													<a href="https://www.facebook.com/profile.php?id=100090316568304" target="_blank" style="color:#ffffff;"><img src="https://assets.codepen.io/210284/fb_1.png" alt="Facebook" width="38" style="height:auto;display:block;border:0;" /></a>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
';

echo $mailSuscripcion;
?>


<!-- <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
	<tr>
		<td align="center" style="padding:0;">
			<table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
				<tr>
					<td align="center" style="padding:40px 0 30px 0;">
						<img src="https://engranetmx.com/BackWeb/assets/img/fondo.jpg" alt="" width="90%"  style="height:auto;display:block;" />
					</td>
				</tr>
				<tr>
					<td style="padding:36px 30px 42px 30px;">
						<table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
							<tr>
								<td style="padding:0 0 36px 0;color:#153643;">
									<span>Hola Agustin Arenas.</span>
									<h1 style="font-size:24px;margin:0 0 5px 0;font-family:Arial,sans-serif;">Tu registro fue exitoso.</h1>
									<span>Muchas gracias por compartirnos tus datos. </span>
									<h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;"></h1>
									<p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">
									Un asesor te contactará tan pronto le sea posible para atender cualquier duda que tengas. De igual forma nuestro bot te enviará un mensaje vía Whatsapp para agendar una posible llamada. ﻿Adjuntamos sobre este email una presentación sobre nuestros servicios.
									</p>
									<p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><a href="https://engranetmx.com/" target="_blank" style="color:#ee4c50;text-decoration:underline;">Visita nuestro sitio web</a></p>
								</td>
							</tr>
							<tr>
								<td style="padding:0;">
									<table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
										<tr>
											<td style="width:260px;padding:0;vertical-align:top;color:#153643;">
												<p style="margin:0 0 25px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><img src="https://assets.codepen.io/210284/left.gif" alt="" width="260" style="height:auto;display:block;" /></p>
												<p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">
												Sabemos que tu tiempo es valioso, por eso te ofrecemos la forma más rápida y cómoda de comunicarte con nosotros por WhatsApp.
												<br>
												¡Esperamos tu mensaje!
												</p>
												<p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><a href="https://api.whatsapp.com/send/?phone=522212145723&text=Hola+engranet&type=phone_number&app_absent=0" target="_blank" style="color:#ee4c50;text-decoration:underline;">Mandar WhatsApp</a></p>
											</td>
											<td style="width:20px;padding:0;font-size:0;line-height:0;">&nbsp;</td>
											<td style="width:260px;padding:0;vertical-align:top;color:#153643;">
												<p style="margin:0 0 25px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><img src="https://assets.codepen.io/210284/right.gif" alt="" width="260" style="height:auto;display:block;" /></p>
												<p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"> Sabemos que tu tiempo es valioso, por lo que te invitamos a agendar una cita con uno de nuestros asesores en línea para que puedas obtener respuestas de manera rápida y personalizada.
												</p>
												<p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><a href="https://engranetmx.com/index.php?view=recepcion" target="_blank" style="color:#ee4c50;text-decoration:underline;">Agendar una cita en línea.</a></p>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td style="padding:30px;background:#ee4c50;">
						<table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
							<tr>
								<td style="padding:0;width:50%;" align="left">
									<p style="margin:0;font-size:14px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;">
										&reg; Engranet, Soluciones Digitales 2023<br /><a href="http://www.example.com" style="color:#ffffff;text-decoration:underline;">engranetmx.com</a>
									</p>
								</td>
								<td style="padding:0;width:50%;" align="right">
									<table role="presentation" style="border-collapse:collapse;border:0;border-spacing:0;">
										<tr>
											<td style="padding:0 0 0 10px;width:38px;">
												<a href="http://www.facebook.com/" style="color:#ffffff;"><img src="https://assets.codepen.io/210284/fb_1.png" alt="Facebook" width="38" style="height:auto;display:block;border:0;" /></a>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table> -->