nclude_once ("../lib/dbcon.php");

//�ʼ��Է��׸��� ��� �Է��ߴ��� �˻��մϴ�.
if ($name=="" || $email=="" || $password=="") {
	echo "
		<script>
			alert('[������ ����] �ʼ��Է¶��� ��Ȯ�� �Է��Ͻʽÿ�.');
				history.back();
					</script>
						";
							die;
							}

							//�����ͺ��̽��� ����մϴ�.
							$sql = "
								insert into guestbook (
									name,email,url,content,password
										,input_date,hostinfo
											) values (
												'$name','$email','$url','".str_replace("'","&acute;",$content)."',MD5('$password')
													,now(),'$REMOTE_ADDR'
														)
																";
																$res = mysql_query($sql);
																$affected_rows = mysql_affected_rows();
																if ($affected_rows>0) {
																	echo "
																		<script>
																			alert('[��ϼ���] ��ϵǾ����ϴ�.');
																				location.replace('list.php');
																					</script>
																						";
																						} else {
																							echo "
																								<script>
																									alert('[��Ͻ���] �����ͺ��̽������� ���� �Ǵ� ȸ���ʵ� ������ ���Ͽ� ��Ͻ����Ͽ����ϴ�.');
																										history.back();
																											</script>
																												";
																												}
																												?>
