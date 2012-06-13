nclude_once ("../lib/dbcon.php");

//필수입력항목을 모두 입력했는지 검사합니다.
if ($name=="" || $email=="" || $password=="") {
	echo "
		<script>
			alert('[데이터 누락] 필수입력란을 정확히 입력하십시오.');
				history.back();
					</script>
						";
							die;
							}

							//데이터베이스에 등록합니다.
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
																			alert('[등록성공] 등록되었습니다.');
																				location.replace('list.php');
																					</script>
																						";
																						} else {
																							echo "
																								<script>
																									alert('[등록실패] 데이터베이스서버의 오류 또는 회원필드 오류로 인하여 등록실패하였습니다.');
																										history.back();
																											</script>
																												";
																												}
																												?>
