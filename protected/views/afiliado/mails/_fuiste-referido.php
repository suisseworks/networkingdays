<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Fuiste Referido</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0; padding: 0;">
	<table border="0" cellpadding="0" cellspacing="0" width="100%">	
		<tr>
			<td style="padding: 10px 0 30px 0;">
				<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc; border-collapse: collapse;">
					<tr>
						<td align="center" bgcolor="#70bbd9" style="padding: 40px 0 30px 0; color: #153643; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;">
                            <img src="<?php echo MyGlobals::EMAIL_LOGO_PATH; ?>" alt="NetworkingDays" width="567" height="230" style="display: block;" />
						</td>
					</tr>
					<tr>
						<td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px;">
										<b>Has recibido una referencia</b>									</td>
								</tr>
								<tr>
									<td style="padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;"><p>Estimad@ <?php echo $nombre ?>,</p>
								    <p>Este correo es para comunicarte que <strong><?php echo $referidor ?></strong> te ha referido con <strong><?php echo $interesado ?></strong> en la Categoría  <strong><?php echo $categoria ?></strong> y Especialidad <strong><?php echo $especialidad ?></strong><strong>

                                    </strong>.</p></td>
								</tr>
								<tr>
									<td>
										<table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                              <td style="padding: 5px 0 0 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                                                 <p>Los datos de tu Potencial Cliente son:</p>
                                                <p><strong>Nombre:</strong> <?php echo $interesado ?> </p>
                                                <p><strong>Teléfono</strong>: <?php echo $telefono ?></p>
                                              <p><strong>e-Mail:</strong> <?php echo $email ?></p>
                                              <p><strong>Comentario:</strong> <?php echo $comentario ?></p>
                                              </td>
                                            </tr>
                                            <tr>
                                           <td width="540" style="padding: 25px 0 0 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                                             <p>Adelante, ya puedes contactarle. ¡Éxitos!</p>
                                             <p>La Gente de Networking Days</p>
                                             <p>.<a href="http://websensemble.com/networkingdays">Ingresa haciendo click aquí</a></p>
                                           </td>
                                            </tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td bgcolor="#181f25" style="padding: 30px 30px 30px 30px;">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;" width="75%">
										&reg; NetworkingDays, Copyright (c) 2014<br/></td>
									<td align="right" width="25%">
										<table border="0" cellpadding="0" cellspacing="0">
											<tr>
												<td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
													<a href="http://www.twitter.com/" style="color: #ffffff;">
														<img src="http://websensemble.com/networkingdays/images/tw.gif" alt="Twitter" width="38" height="38" style="display: block;" border="0" />
													</a>
												</td>
												<td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
												<td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
													<a href="http://www.facebook.com/NetworkingDays" style="color: #ffffff;">
														<img src="http://websensemble.com/networkingdays/images/fb.gif" alt="Facebook" width="38" height="38" style="display: block;" border="0" />
													</a>
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
</body>
</html>