<!DOCTYPE html>
<?php
//this code retrieves all the files in the database table "expense"
include_once '../Classes/expense.php';


  
  $obj_expense = new Expense();
  $res_all_expense = $obj_expense->getAllExpense_1();
  
  
  $b = 1;
  $e = 1;
  
?>


<form id="merchant_table">  <table class="fullwidth" id="append_old" cellpadding="0" cellspacing="0" border="0">
										<thead>
											<tr style="background-color:#00CCFF;">
												<!--<td><input type="checkbox" class="checkall" /></td>-->
                                                                                            <!--<td style="width: 10%;"><a href = "" class="td_click" id="date_click">Date</a> <span id="sidearrow"> <a class="td_click" id="date_asc" href=""> < </a> </span> <span id="sidearrow"> <a class="td_click" id="date_desc" href="" > > </a> </span></td>-->
                                                                                            <td style="width: 20%;"><a href = "" class="td_click" id="merchant_click">Receipt</a> <span id="sidearrow"> <a class="td_click" id="merchant_asc" href=""> < </a> </span> <span id="sidearrow"> <a class="td_click" id="merchant_desc" href=""> > </a> </span> </td>
                                                                                                <td style="width: 10%;"><a href = "" class="td_click" id="total_click">Document</a> <span id="sidearrow"> <a class="td_click" id="total_asc" href=""> < </a> </span> <span id="sidearrow"> <a class="td_click" id="total_desc" href=""> > </a> </span> </td>
                                                                                                <td style="width: 20%;"><a href = "" class="td_click" id="status_click">Status</a> <span id="sidearrow"> <a class="td_click" id="status_asc" href=""> < </a> </span> <span id="sidearrow"> <a class="td_click" id="status_desc" href=""> > </a> </span> </td>
                                                                                                <td style="width: 40%;"><a href = "" class="td_click" id="comment_click">Comment</a> <span id="sidearrow"> <a class="td_click" id="comment_asc" href=""> < </a> </span> <span id="sidearrow"> <a class="td_click" id="comment_desc" href=""> > </a> </span> </td>

												
											</tr>
										</thead>
                                                                                <tbody id="expense_tbody">
                                                                                     <?php 
                                                                                     while ($rows = mysqli_fetch_object($res_all_expense)) {  ?>
                                                                                     
                                                                                    <tr style="height: 40px;" class="row">
                                                                                          
												
                                                                                            <!--<td><input type="checkbox"/></td>-->
												<td><?php //echo $rows->Date; ?></td>
                                                                                                
                                                                                                <?php if ($rows->Receipt != ''){
                                                                                                $opt = explode('/', $rows->Receipt);                                                                                                
//                                                                                                $option = $opt[0].$opt[1]; if($option == '..picture'){  ?>
                                                                                                <td style='color: #000000; font-family: "Source Sans Pro", "sans-serif"; font-weight: bold;'>
                                                                                                    <?php echo $opt[2]; ?></td>
                                                                                                <?php } else { ?>
                                                                                                <td style='color: #000000; font-family: "Source Sans Pro", "sans-serif"; font-weight: bold;'>
                                                                                                    </td>
                                                                                                <?php } ?>
                                                                                                
                                                                                                
                                                                                        <?php if ($rows->document != ''){
                                                                                                $opt = explode('/', $rows->document);                                                                                                
//                                                                                                $option = $opt[0].$opt[1]; if($option == '..picture'){  ?>
                                                                                                <td style='color: #000000; font-family: "Source Sans Pro", "sans-serif"; font-weight: bold;'>
                                                                                                    <?php echo $opt[2]; ?></td>
                                                                                                <?php } else { ?>
                                                                                                <td style='color: #000000; font-family: "Source Sans Pro", "sans-serif"; font-weight: bold;'>
                                                                                                    </td>
                                                                                                <?php } ?>
                                                                                                    
                                                                                                    
                                                                                                 
                                                                                                    
                                                                                                    <td><?php echo $rows->Status; ?></td>
                                                                                                    
                                                                                                    <td><?php echo $rows->Comment; ?></td>
							
											</tr>
                                                                           

                                                                                                  ?>
                                                                                                                                                         
                                                                                      
										</tbody>
                                                              </table></form>
