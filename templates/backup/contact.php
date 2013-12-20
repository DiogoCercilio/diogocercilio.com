<div class="leftContact" id="leftContact">

    <h1><?php echo $contactTitle;?></h1>
    <p><?php echo $contactContent; ?></p>
                        <style>
                    .result{
                        width:98%;
                        height:auto;
                        background: #cf3;
                        margin:-29px 0 9px 0;
                        text-align: center;
                        color: #555;
                        text-shadow:1px 1px 0 #fff;
                        font-size:12px;
                        font-family: arial;
                        padding: 2px 10px;
                        border-radius: 1px;
                        display: none;
                    }
                    </style>
                    <div class="result">teste</div>
    <form id="contactForm" action="" method="post">
    	<div class="inputs">
    
            <div style="position: relative;margin: 10px 0;">
            <span style="margin-left: 7px;font-size:11px;">Assunto<span class="require">*</span></span>
                <input type="text" name="contact_assunto">
            </div>

            <div style="position: relative;margin: 20px 0;">
            	<span style="margin-left: 18px;font-size:11px;"><?php echo $formName; ?><span class="require">*</span></span>
                    <input type="text" name="contact_name"><br>
            </div>        

            <div style="position: relative;margin: 30px 0;">

        		<span style="float:left;margin-left:4px;font-size:11px;"><?php echo $formPhone; ?><span class="require">*</span></span>
                 
                    <input style="float:left;width:50px;margin: 0 4px 0 3px;" type="text" name="contact_ddd">
                    <input style="float:left;width:190px;" type="text" name="contact_phone"><br>
                </div>

                <div style="position: relative;margin: 40px 0;">
                <span style="margin-left: 17px;font-size:11px;"><?php echo $formEmail; ?><span class="require">*</span></span>
                    <input type="text" name="contact_mail"><br>
                </div>
    	</div>

    	<div class="area">
            <div style="position: relative;margin: 10px 0 0 0;">
    		  <textarea name="contact_message" cols="48" rows="9"></textarea>
            </div>
            <input class="sendData" type="submit" name="sendData" value="<?php echo $formSend; ?>">           		
    	</div>
    </form>

</div>
<div style="clear:both;"></div>