<div><p><?php echo $Proposal['Proposal']['inv_first_name'];?> <?php echo $Proposal['Proposal']['inv_last_name'];?>:</p><p>Thank you for your interest in SFP grants. This message is to confirm one of the following:</p><ol><li>Proposal information has been recorded</li><li>Completed proposal has been submitted</li><li>Proposal has been amended/edited</li></ol><p>This email includes the information that has been recorded for your proposal. At any time before the April 12, 2011 deadline, you can log in to complete and/or edit your submission. Please note that all fields with the exception of the appendix are required fields. Failure to include all fields will result in the disqualification of your proposal.</p><p>Please note also that your file uploads are not included in this email for security reasons, but you can verify that they have been received when you log into the grants site.</p><ul>    <h2>Principal Investigator</h2>    <li> Name: <?php echo $Proposal['Proposal']['inv_first_name'];?> <?php echo $Proposal['Proposal']['inv_last_name'];?></li>    <li>Institution: <?php echo $Proposal['Proposal']['inv_institution'];?></li>    <li>Telephone: <?php echo $Proposal['Proposal']['inv_telephone'];?></li>    <li>Email: <?php echo $Proposal['Proposal']['inv_email'];?></li>    <li>Address: <?php echo $Proposal['Proposal']['inv_address_1'];?></li>    <li>Address 2:<?php echo $Proposal['Proposal']['inv_address_2'];?></li>    <li>City: <?php echo $Proposal['Proposal']['inv_city'];?></li>    <li>State: <?php echo $Proposal['Proposal']['inv_state'];?></li>    <li>Zip: <?php echo $Proposal['Proposal']['inv_zip'];?></li>    <h2>Financial Accounts Officer</h2>    <li>Name: <?php echo $Proposal['Proposal']['fin_first_name'];?> <?php echo $Proposal['Proposal']['fin_last_name'];?> </li>    <li>Telephone: <?php echo $Proposal['Proposal']['fin_telephone'];?></li>    <li>Email: <?php echo $Proposal['Proposal']['fin_email'];?></li>    <h2>Contracts and Grants Department or Authorized Organizational Official</h2>    <li>Name: <?php echo $Proposal['Proposal']['con_first_name'];?> <?php echo $Proposal['Proposal']['con_last_name'];?></li>    <li>Institution: <?php echo $Proposal['Proposal']['con_institution'];?></li>    <li>Address: <?php echo $Proposal['Proposal']['con_address_1'];?></li>    <li>Address 2:<?php echo $Proposal['Proposal']['con_address_2'];?></li>    <li>City: <?php echo $Proposal['Proposal']['con_city'];?></li>    <li>State: <?php echo $Proposal['Proposal']['con_state'];?></li>    <li><?php echo $Proposal['Proposal']['con_zip'];?></li>    <h2>Grant Information</h2>    <li>Project Type: <?php echo $Proposal['ProjectType']['project_type'];?></li>    <li>Duration: <?php echo $Proposal['Duration']['duration'];?></li>    <li>Project Title: <?php echo $Proposal['Proposal']['project_title'];?></li>    <li>Project Abstract: <?php echo $Proposal['Proposal']['project_abstract'];?></li>    <li>Project Budget: <?php echo $Proposal['Proposal']['project_budget'];?></li>    <li>Project Dates: <?php echo $Proposal['Proposal']['project_dates'];?></li></ul></div>