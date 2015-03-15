<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<script>
    function inputFocus(i){
        if(i.value==i.defaultValue){ i.value=""; i.style.color="#000"; }
    }
    function inputBlur(i){
        if(i.value==""){ i.value=i.defaultValue; i.style.color="#888"; }
    }
</script>

<div class="form">

    <?php
    $form=$this->beginWidget('CActiveForm', array(
        'id'=>'user-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation'=>false,
    )); ?>


    <p class="note">Fields with <span class="required">*</span> are required.</p>
    <span>Please fill out and make sure that this information is correct.  If you win, this will be used to contact you.</span>

    <?php echo $form->errorSummary($model); ?>

    <div class="mobile_container">
        <div class="row">
            <?php echo $form->labelEx($model,'first_name'); ?><br/>
            <?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>100,'title'=>'Please type carefully, this is whom the checks will be made out to.')); ?>
            <?php echo $form->error($model,'first_name'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'last_name'); ?><br/>
            <?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>100,'title'=>'Please type carefully, this is whom the checks will be made out to.')); ?>
            <?php echo $form->error($model,'last_name'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'email'); ?><br/>
            <?php echo $form->emailField($model,'email',array('size'=>60,'maxlength'=>200,'minlength'=>8,'title'=>'These are only used as reminders to Bracket Fanatic, and are not used as distribution', 'placeholder'=>'Someone@BracketFanatic.com')); ?>
            <?php echo $form->error($model,'email'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'user_name'); ?><br/>
            <?php echo $form->textField($model,'user_name',array('size'=>60,'maxlength'=>100,'minlength'=>5,'title'=>'Must be at least 5 characters long.', 'placeholder'=>'JonJackup')); ?>
            <?php echo $form->error($model,'user_name'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'password'); ?><br/>
            <?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>100,'minlength'=>5,'title'=>'Must be at least 5 characters long.')); ?>
            <?php echo $form->error($model,'password'); ?>
        </div>
    </div>

    <div class="mobile_container">

        <div class="row">
            <?php echo $form->labelEx($model,'city'); ?><br/>
            <?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'city'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'state'); ?><br/>
            <?php echo $form->dropDownList($model,'state',array('status'=>'--',
                'AL'=>'AL'
            ,'AK'=>'AK'
            ,'AZ'=>'AZ'
            ,'AR'=>'AR'
            ,'CA'=>'CA'
            ,'CO'=>'CO'
            ,'CT'=>'CT'
            ,'DE'=>'DE'
            ,'DC'=>'DC'
            ,'FL'=>'FL'
            ,'GA'=>'GA'
            ,'HI'=>'HI'
            ,'ID'=>'ID'
            ,'IL'=>'IL'
            ,'IN'=>'IN'
            ,'IA'=>'IA'
            ,'KS'=>'KS'
            ,'KY'=>'KY'
            ,'LA'=>'LA'
            ,'ME'=>'ME'
            ,'MD'=>'MD'
            ,'MA'=>'MA'
            ,'MI'=>'MI'
            ,'MN'=>'MN'
            ,'MS'=>'MS'
            ,'MO'=>'MO'
            ,'MT'=>'MT'
            ,'NE'=>'NE'
            ,'NV'=>'NV'
            ,'NH'=>'NH'
            ,'NJ'=>'NJ'
            ,'NM'=>'NM'
            ,'NY'=>'NY'
            ,'NC'=>'NC'
            ,'ND'=>'ND'
            ,'OH'=>'OH'
            ,'OK'=>'OK'
            ,'OR'=>'OR'
            ,'PA'=>'PA'
            ,'RI'=>'RI'
            ,'SC'=>'SC'
            ,'SD'=>'SD'
            ,'TN'=>'TN'
            ,'TX'=>'TX'
            ,'UT'=>'UT'
            ,'VT'=>'VT'
            ,'VA'=>'VA'
            ,'WA'=>'WA'
            ,'WV'=>'WV'
            ,'WI'=>'WI'
            ,'WY'=>'WY'
            )); ?>
            <?php echo $form->error($model,'state'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'zip'); ?><br/>
            <?php echo $form->textField($model,'zip',array('size'=>8,'maxlength'=>8)); ?>
            <?php echo $form->error($model,'zip'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'phone'); ?><br/>
            <?php echo $form->textField($model,'phone',array('size'=>18,'maxlength'=>18, 'placeholder'=>'1(555)-555-5555')); ?>
            <?php echo $form->error($model,'phone'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'terms'); ?><br/>
            <div class="terms">
            <strong>Official Rules<br>Terms and Conditions:</strong><br/>

            <strong>1.</strong> NO PURCHASE NECESSARY TO PLAY/WIN A PRIZE. A PURCHASE/DONATION/PAYMENT OF ANY KIND  WILL NOT IMPROVE

            CHANCES OF WINNING. To request a BracketFanatic™ ticket send a SASE to: WC Senior Class ANP, Att: BracketFanatic™

            Sweepstakes, 1801 Bristol NW Grand Rapids, MI 49504. A BracketFanatic™ Sweepstakes ticket will be provided via USPS standard

            delivery (Please allow ample time for postal delivery, cannot guarantee USPS delivery prior to 11:00am March 19, 2015 deadline). Void

            where prohibited. Must be US resident, 18yrs of age+ with internet access and valid email to participate in BracketFanatic™ Sweepstakes.<br/>

            <strong>2.</strong> Terms/Definitions.  “Sponsor” refers to the participating organization promoting their entity or cause in utilizing BracketFanatic® as a fundraising

            tool to benefit their organization.  “Host” refers to BracketFanatic™, American Expositions, Inc, and any of its affiliates, agents or entities.

            Odds of Winning. Sweepstakes wins depends on number of entries received within the organization’s 1000 ticket maximum and the skill of the picks made

            by each entrant’s team’s point totals.<br/>

            Prize Delivery  Winners will be notified of their winning result by email from the organization and prizes will be mailed via USPS no later than 15 days after

            the 2015 BracketFanatic™ Sweepstakes conclusion.<br/>

            Winner Notification and Verification. Receiving a Prize is contingent upon compliance with these Official Rules, including all eligibility requirements. The

            winners will be notified within fifteen (15) days after the culmination of the NCAA Championship Game April 6, 2015. The Winners will be notified by email or

            phone using the telephone number (if any) or email address provided in the Entrant's Registration. Sponsor is not responsible if unable to contact a potential

            Winner for prize notification purposes for whatever reason, including Entrant's failure to provide a correct telephone number or email address at the time of

            submission of BracketFanatic ™ Registration.<br/>

            Release of Liability. Although Sponsor and Host attempt to ensure the integrity of the Sweepstakes, neither Sponsor nor any of the Sweepstakes Entities

            are responsible for, nor can they control or prevent with 100% accuracy, the actions of Entrants or other individuals in connection with the contest, including

            attempts by Entrants or other individuals to circumvent these Official Rules or otherwise interfere with the administration, security, fairness, integrity or proper

            conduct of the contest, or for any technological malfunctions which may occur and  webpages hosted by Host  or otherwise with regard to the contest,

            including but not limited to any loss or corruption of any Registration Information and all Entrants release sweepstakes contest Entities from any and all

            liability, claims, or damages relating thereto. If, for any reason, the contest  is not capable of running as planned by reason of damage by acts of God,

            sabotage, terrorism or threats thereof, computer virus, worms, bugs, tampering, unauthorized intervention, fraud, technical limitations or failures, strikes,

            industry conditions, bankruptcy or liquidation, marketplace demands, applicable law, unforeseen obstacles, or any other causes which, in the sole opinion of

            Sponsor, could corrupt, compromise, undermine, or otherwise affect the administration, security, fairness, integrity, viability, or proper conduct of the contest,

            Sponsor and Host Entities reserves the right in their sole and absolute discretion to modify these Official Rules, and/or to cancel, terminate, modify or

            suspend all or any part of the Sweepstakes, and in the event of cancellation or termination, to elect to select Winners from among all eligible non-suspect

            Entries received up to the time of such cancellation, termination, modification, or suspension, as applicable and all Entrants hereby release Sweepstakes

            Entities for any claims relating thereto. Notice of such cancellation, termination, modification, or suspension will be posted on the Website. Sponsor and Host

            will prohibit any Entrant or potential Entrant from participating in the Sweepstakes, if such Entrant or potential Entrant shows a disregard for these Official

            Rules, acts with an intent to annoy, abuse, threaten, or harass any other Entrant, Sponsor, or Sweepstakes Entities or behaves in any other or disruptive or

            fraudulent manner (as determined by Sponsor in its sole discretion). Sponsor will disqualify any individual found to be: (a) tampering or attempting to tamper

            with the entry process or the operation of the Sweepstakes, the Websites, Registration, or the Tournament; (b) violating the Official Rules; (c) violating the

            terms of service, conditions of use and/or general rules or guidelines of any Host property or service; or (d) acting in a fraudulent, misleading, deceptive,

            unfair, unsportsmanlike or disruptive manner, or with intent to annoy, abuse, threaten or harass any other person.<br/>

            The Official Rules will be posted on the Website throughout the Entry Window. By entering and participating in the Sweepstakes, each Entrant represents

            and warrants that all information provided by Entrant in the Sweepstakes, including on the Registration Form or Sweepstakes Entry Bracket ("Registration

            Information") is true, accurate and complete. ANY ATTEMPT BY AN ENTRANT OR ANY OTHER INDIVIDUAL TO DELIBERATELY DAMAGE OR

            UNDERMINE THE LEGITIMATE OPERATION OF THE CHALLENGE IS A VIOLATION OF THESE OFFICIAL RULES, AS WELL AS CRIMINAL AND CIVIL

            LAWS. SHOULD SPONSOR BELIEVE OR BECOME AWARE THAT SUCH AN ATTEMPT HAS BEEN, IS BEING, OR WILL BE MADE, SPONSOR AND

            CHALLENGE ENTITIES RESERVES THE RIGHT TO SEEK REMEDIES AND DAMAGES FROM ANY RESPONSIBLE ENTRANT(S) AND OTHER

            RESPONSIBLE INDIVIDUAL(S) IN THE ATTEMPTED DAMAGE TO THE FULLEST EXTENT PERMITTED BY LAW.<br/>

            Applicable Law/Disputes. Except where prohibited, as a condition of participating in this BracketFanatic™, each Entrant agrees that any and all disputes

            which cannot be resolved between the parties, claims and causes of action arising out of or connected with Host or Sponsor, or any Prize awarded, or the

            determination of Winners, shall be resolved individually, without resort to any form of class action. Further, in any such dispute, under no circumstances will

            an Entrant be permitted to obtain awards for, and hereby waives all rights to claim punitive, incidental or consequential damages, or any other damages,

            including attorneys' fees, other than Entrant's actual out-pocket expenses (e.g., costs associated with entering this Sweepstakes). Entrant further waives all

            rights to have damages multiplied or increased. All issues and questions, rights, and obligations of an Entrant in connection with this Sweepstakes shall be

            governed by, and construed in accordance with, the laws of the Michigan, without giving effect to the conflict of laws rules thereof and any matters or

            proceedings which are not subject to arbitration as set forth in these Official Rules and/or for entering any judgment on an arbitration award, shall take place

            in Grand Rapids, Michigan (provided that such location is reasonably convenient for claimant, and if not, as determined by the arbitrator). The parties waive

            rights to trial by jury in any action or proceeding instituted in connection with these Official Rules. Any controversy or claim arising out of or relating to these

            Official Rules and/or this Sweepstakes shall be settled by binding arbitration in accordance with the commercial arbitration rules of the American Arbitration

            Association ("AAA"). Any such controversy or claim shall be arbitrated on an individual basis, and shall not be consolidated in any arbitration with any claim

            or controversy of any other party. The arbitration shall be conducted in Grand Rapids, Michigan, and judgment on the arbitration award may be entered into

            any court having jurisdiction thereof. In the event that the claimant is able to demonstrate that the costs of arbitration will be prohibitive as compared to the

            costs of litigation, Sponsor will pay as much of the claimant's filing and hearing fees in connection with the arbitration as the arbitrator deems necessary to

            prevent the arbitration from being cost-prohibitive. If any part of this arbitration provision is deemed to be invalid, unenforceable or illegal (other than that

            claims will not be arbitrated on a class or representative basis), or otherwise conflicts with the rules and procedures established by AAA, then the balance of

            this arbitration provision shall remain in effect and shall be construed in accordance with its terms as if the invalid, unenforceable, illegal or conflicting

            provision were not contained herein. If, however, the portion that is deemed invalid, unenforceable or illegal is that claims will not be arbitrated on a class or

            representative basis, then the entirety of this arbitration provision shall be null and void, and neither claimant nor Sponsor shall be entitled to arbitrate their

            dispute. THE ARBITRATION OF DISPUTES PURSUANT TO THIS PARAGRAPH SHALL BE IN THE ENTRANT'S INDIVIDUAL CAPACITY, AND NOT

            AS A PLAINTIFF OR CLASS MEMBER IN ANY PURPORTED CLASS OR REPRESENTATIVE PROCEEDING. THE ARBITRATOR MAY NOT

            CONSOLIDATE OR JOIN THE CLAIMS OF OTHER PERSONS OR PARTIES WHO MAY BE SIMILARLY SITUATED. DO NOT ENTER THIS

            CHALLENGE IF YOU DO NOT AGREE TO HAVE ANY CLAIM OR CONTROVERSY ARBITRATED IN ACCORDANCE WITH THESE OFFICIAL RULES.

            BY PARTICIPATING IN THE SWEEPSTAKES, EACH ENTRANT AGREES THAT TO THE EXTENT PERMITTED BY APPLICABLE LAW: (1) ANY AND

            ALL DISPUTES, CLAIMS AND CAUSES OF ACTION ARISING OUT OF OR CONNECTED WITH THE SWEEPSTAKES, OR ANY PRIZE AWARDED,

            WILL BE RESOLVED INDIVIDUALLY THROUGH BINDING ARBITRATION AS SET FORTH ABOVE, WITHOUT RESORT TO ANY FORM OF CLASS

            ACTION; (2) ANY AND ALL CLAIMS, JUDGMENTS AND AWARDS WILL BE LIMITED TO ACTUAL THIRD-PARTY, OUT-OF-POCKET COSTS

            INCURRED (IF ANY), BUT IN NO EVENT WILL ATTORNEYS' FEES BE AWARDED OR RECOVERABLE; (3) UNDER NO CIRCUMSTANCES WILL ANY

            ENTRANT BE PERMITTED TO OBTAIN ANY AWARD FOR, AND ENTRANT HEREBY KNOWINGLY AND EXPRESSLY WAIVES ALL RIGHTS TO SEEK,

            PUNITIVE, INCIDENTAL, CONSEQUENTIAL OR SPECIAL DAMAGES, LOST PROFITS AND/OR ANY OTHER DAMAGES, OTHER THAN ACTUAL OUT

            OF POCKET EXPENSES), AND/OR ANY RIGHTS TO HAVE DAMAGES MULTIPLIED OR OTHERWISE INCREASED; AND (4) ENTRANT'S REMEDIES

            ARE LIMITED TO A CLAIM FOR MONEY DAMAGES (IF ANY) AND ENTRANT IRREVOCABLY WAIVES ANY RIGHT TO SEEK INJUNCTIVE OR

            EQUITABLE RELIEF. SOME JURISDICTIONS DO NOT ALLOW THE LIMITATIONS OR EXCLUSION OF LIABILITY, SO THE ABOVE MAY NOT APPLY

            TO EVERY ENTRANT.<br/>

            <strong>Miscellaneous.</strong><br/>

            <strong>1. Privacy:</strong> Information submitted in connection with the Sweepstakes will be treated in accordance with these Official Rules. With respect to the use

            and disclosure of such information by Sponsor, such information also will be treated in accordance with the Privacy Policy (as may be amended

            from time to time). In the event of any conflict between these Official Rules and Sponsor's Privacy Policy, the terms and conditions of the Official

            Rules shall prevail. By entering the Sweepstakes, Entrant agrees that Sponsor may share Entrant's personal information with select and

            necessary Sweepstakes Entities for the purpose of Prize fulfillment in the event Entrant is chosen as a potential Winner. Entrant also agrees that

            Sponsor may share Entrant's personal information with its agents, for the sole purpose of verifying compliance with these Official Rules. Entrants

            who choose to receive emails, text messages, telephone calls, or other communications about future promotions or other offers from or on behalf

            of Sponsor or other Sweepstakes Entities agree that such parties and/or their representatives may contact such Entrants to distribute information

            regarding such party's products, services, special events, promotional offers, or incentives. With respect to email communications, Entrants may

            choose to opt-out of future email notifications by clicking the link in the email and following the opt-out instructions. Opting in to specific offers does

            not improve an Entrant's chances of winning.<br/>

            <strong>2. Publicity Release:</strong> Except where prohibited, by accepting a Prize, each Winner grants permission for Sponsor and Sweepstakes Entities to use

            his/her name, voice, image and/or likeness, for advertising, merchandising, promotion and/or publicity purposes in any and all media now known

            or hereinafter invented without territorial or time limitations and without additional compensation.<br/>

            Official Rules. By participating in the BracketFanatic™ Sweepstakes, each Entrant fully and unconditionally agrees to and accepts these Official Rules and

            decisions of the Sponsor, which are final and binding in all matters relating to BracketFanatic™. The Sweepstakes will be run in accordance with the Official

            Rules, subject to amendment by Sponsor. Each Entrant must comply with the Official Rules and will be deemed to have received and understood the Official

            Rules by participating in the BracketFanatic™. The terms of the BracketFanatic™, as set out in the Official Rules, are not subject to amendment or

            counteroffer, unless determined by Sponsor in its sole discretion. If any provisions of the Official Rules are held to be invalid or unenforceable, all remaining

            provisions hereof will remain in full force and effect. Sponsor and Host Entities' failure to enforce any term of these Official Rules will not constitute a waiver

            of that provision.<br/>

            Non-Affiliation Disclaimer. BracketFanatic™ is not in any way affiliated with, or endorsed by, the NCAA, NCAA Basketball or its institutions.

            How to Enter. NO PURCHASE NECESSARY TO ENTER THE SWEEPSTAKES. To enter the Sweepstakes, eligible individuals ("Entrant" or "Entrants")

            must complete the following Registration Process.<br/>

            <strong>1. BracketFanatic™ Registration Form.</strong><br/>
            Entrants must visit the Website, available at www.BracketFanatic.com, to register with Sponsor for the

            Sweepstakes by completing the registration form. To complete the Registration Form, Entrants will be required to provide their name, date of birth,

            home address and email address, which Entrants acknowledge shall be considered Entrant's contact information for purposes of the Sweepstakes. In

            the event of a dispute regarding the identity of an Entrant or potential winner due to a conflict between the personal information provided on the

            Registration Form and the account information on file for the particular individual associated with the Entry (defined below), the personal information set

            forth in the Registration Form shall govern. A potential winner may be required to provide proof that he/she is the person set forth on the Sweepstakes

            Registration Form in Sponsor's sole discretion. As set forth in Rule 3(c) below, at the end of the Registration Process, all Entrants will receive an email

            at the email address provided in the Registration Form.<br/>

            <strong>2. Creating Entries:</strong> Sweepstakes Entry Bracket. Once you have completed the Registration Process, you may create your bracket for the Sweepstakes

            (a "Entry Bracket" or "Entry"). You may edit your Picks in your Entry Bracket at any time up until the close of the Entry Window.Your Sweepstakes

            Entry Bracket must be created either on the BracketFanatic™ Website. If the Bracket Submission Period for the Sweepstakes is open, continue to Rule

            3(f) below to learn how to fill out and submit your Entry Bracket.<br/>

            <strong3. Filling Out and Submitting Your Sweepstakes Entry Bracket: The seedings for the Tournament will be posted on the BracketFanatic™ website

            www.BracketFanatic.com  shortly after the Seeding Announcement. At that time, if you are fully registered, by completing the  Registration Form, and

            verified for the Sweepstakes via the Registration Process set forth above, you must return to the website during the Bracket Submission Period to

            populate your Challenge Entry Bracket with your Picks. Note that the "play-in" games scheduled for Tuesday, March 17 and Wednesday, March 18,

            2015, are included Entry Brackets, and will be automatically filled in with the #16 seed “play-in” winners if the bracket is completed and unedited before

            the close of the Entry Window. Any picks may be modified prior to the close of the Entry Window.<br/>

            In the event of a tie in entry winner’s results, a Tiebreaker will be utilized to determine the winning entry. The entry with the highest point total of

            the previous round’s score will be used to determine the winner. A user who has submitted the foregoing materials in keeping with the deadlines

            described in these Official Rules, and who is otherwise in full compliance with the eligibility restrictions and all other provisions of these Official

            Rules, is referred to as a qualifying Entrant. You have until the close of the Entry Window to create your Entry Bracket, complete your Picks and

            make revisions to your Entry Bracket. YOUR FINAL PICKS WILL BE LOCKED IN YOUR SWEEPSTAKES ENTRY BRACKET AT THE END OF

            THE ENTRY WINDOW, REGARDLESS OF THE EXTENT TO WHICH IT HAS BEEN COMPLETED.<br/>

            In the event that one or more teams participating in the Tournament change(s) for any reason after the initial Tournament seedings have been

            posted for the Tournament , the Sponsor will update the BracketFanatic™  to reflect the changed team(s), and will make a reasonable attempt to

            notify Entrants of the changed bracket by posting a notice of the change(s) on the BracketFanatic™ website. At that point, it is the Entrant's

            responsibility, prior to the end of the Entry Window, to return to the BracketFanatic™ website to modify his/her Entry Bracket for any game(s)

            affected by the changed teams. Sponsor will not automatically update any Picks in order to reflect the change in teams, so any previously selected

            Picks affected by a change in teams may be treated as incorrect and Entrants release Sponsor and Host Entities from all liability in connection

            therewith.<br/>

            Sponsor reserves the right to modify the entry process as described herein in its sole discretion and notice will be posted on the Website reflecting

            same.<br/>

            Scoring. The Sweepstakes scores all Picks in an Entrant's Entry Bracket exclusively on the basis of the scoring system ("Scoring System"). Under the

            Scoring System, the entry’s teams picked at each seed level, 1 through 16, will utilize the total points scored by those teams through each of the scored

            rounds (round of 64, 32, 16, 8 and Grand Total). Each round is totaled only those game within that round. Grand Total is based upon all points scored by an

            entry’s teams throughout the entire tournament.

            <strong>Winning Paytable:</strong><br/>

            In addition to these Official Rules, additional rules and guidelines regarding game play and scoring can be found at the Website. In the event of a conflict

            between these Official Rules and any instruction found elsewhere these Official Rules will control.

            Conditions, Disclaimers, and License. By entering the Sweepstakes, each Entrant agrees that: (a) he or she will abide by and be bound by these Official

            Rules; (b) the Entry, including any comments submitted, becomes solely the Sponsor's property and will not be acknowledged or returned; (c) neither

            Sponsor nor Sweepstakes Entities are responsible for claims, injuries, death, losses or damages of any kind resulting from participation or inability to

            participate in the Sweepstakes, or the administration of the Sweepstakes, or the awarding, acceptance, use, misuse, possession, loss or misdirection of a

            Prize or Registration Information; (d) Sponsor and Sweepstakes Entities are not responsible for any inability or refusal of a Winner to accept a Prize for any

            reason; and (e) by entering the Sweepstakes, all Entrants further agree that Sponsor and Challenge Entities have the sole right to decide all matters relating

            to the Challenge, including fact, interpretation, eligibility, procedure, fulfillment, and disputes from the Challenge. Entrants agree to look solely to Sponsor for

            any claims or liabilities with respect to this Sweepstakes, including the development, execution and administration thereof.
            </div>
            <br/>
            <div class="clear"></div>
            <?php echo $form->checkBox($model,'terms'); ?>
            <div style="margin-left: 15px;">I accept the Terms & Conditions listed above</div>
            <?php echo $form->error($model,'terms'); ?>
        </div>
    </div>
<div class="clear"></div>
    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->