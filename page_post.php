<?php 
	require_once('Config/Database.php');
	require_once('header.php');
	require_once('navbar.php'); 
	require_once('sidebar.php'); ?>
<!-- CONTENT HERE -->

	<?php 
		$showDomain = mysqli_query($connecDB, "SELECT * FROM options")or die(mysql_error());
		$d = mysqli_fetch_array($showDomain);
		// echo $d['domainname'];
		if (isset($_GET['p'])) {

			if ($_GET['p']=='privacy') {
	?>

			<div class="col-md-9">
				<h1 class="h1-single">Privacy Police</h1>
				<div class="custom-hr"><i>Published by <a href="">admin</a></i></div>
				<br />
				<p style="font-size:0.8em;color:#bbbbbb; margin:-5em 0.7em 1em;text-align:right;">Photo credits: <a href="http://www.tenanan.com/" target="_blank">tenanancom</a></p>
				<p>&nbsp;</p>
				<p><span style="text-decoration: underline;"><strong>Your privacy at <?php echo $d['domainname']; ?></strong></span></p>
				<p>We collect no personal information about you when you visit our website unless you choose to provide this information to us. However, we collect and store certain information automatically. Here is how we handle information about your visit to our website.</p>
				<p>What We Collect and Store Automatically?</p>
				<p>If you do nothing during your visit but browse through the website, read pages, or download information, we will gather and store certain information about your visit automatically. This information does not identify you personally.</p>
				<p>We automatically collect and store only the following information about your visit:</p>
				<ul>
				<li><em>The Internet domain (for example, “website.com” if you use a private Internet access account, or “highschool.edu” if you connect from a university’s domain) and IP address (an IP address is a number that is automatically assigned to your computer whenever you are surfing the Web) from which you access our website.</em></li>
				<li><em>The type of browser and operating system used to access our site.</em></li>
				<li><em>The date and time you access our site.</em></li>
				<li><em>The pages you visit.</em></li>
				<li><em>If you linked to our website from another website, the address of that website.</em></li>
				</ul>
				<p>We use the information we collect to count the number and type of visitors to the different pages on our site, and to help us make our site more useful to visitors like you.</p>
				<p>If you send us an e-mail or a comment, you may choose to provide us with personal information, such as your name or your e-mail address. We use the information to improve our service to you or to respond to your request.</p>
				<p>Except for authorized law enforcement investigations, we do not share our e-mail with any other outside organizations.</p>
				<p><span style="text-decoration: underline;"><strong>Cookies</strong></span></p>
				<p>To save you comment’s information every time you visit <?php echo $d['domainname']; ?>, we place a little text file called a “cookie” on your hard drive. It sits in your web browser directory.</p>
				<p>A cookie lets us store your profile information on your computer and let’s our web site retrieve it when you visit our site. No other web site can use or view the cookie set by <?php echo $d['domainname']; ?>.</p>
				<p>Cookies help us create a speedy web experience by remembering your address and email information, so you don’t have to re-type it when making comments.</p>
				<p>Google, as a third party vendor, uses cookies to serve ads on this site.</p>
				<p>Google’s use of the DART cookie enables it to serve ads to our users based on their visit to <?php echo $d['domainname']; ?> and other sites on the Internet.</p>
				<p>Users may opt out of the use of the DART cookie by visiting the <a href="http://www.google.com/privacy_ads.html" target="_blank">Google ad and content network privacy policy</a>.</p>
				<p><span style="text-decoration: underline;"><strong>Tracking Clickstream Behavior And Advertisement</strong></span></p>
				<p>In order to track website usage, we use <a href="http://www.google.com/analytics/" target="_blank">Google Analytics</a> which, as mentioned above, does not allow the collection of personal identifiable information. In order to understand better how Google Analytics collect and save information, check their <a href="http://www.google.com/analytics/tos.html" target="_blank">Terms of Service</a> and their <a href="http://www.google.com/analytics/learn/privacy.html" target="_blank">Safeguarding Policy</a>.</p>
				<p>One important feature we use in Google Analytics is the Remarketing Lists, which sets a third party cookie on visitors’ browsers in order to target them with Advertising on the Google Distributed Network. You can read more about this feature in <a href="http://support.google.com/analytics/bin/answer.py?hl=en&amp;answer=2611268" target="_blank">the help center</a>.</p>
				<p>Here are useful links if you would like to be removed from our Google Analytics tracking:</p>
				<ul>
				<li><em>vOpt-out of Google Analytics for Display Advertising and customize Google Display Network ads using the <a href="https://www.google.com/ads/preferences/" target="_blank">Ads Preferences Manager</a>.</em></li>
				<li><em><a href="https://tools.google.com/dlpage/gaoptout/" target="_blank">Google Analytics opt-out browser add-on</a>.</em></li>
				</ul>
				<p><span style="text-decoration: underline;"><strong>Third Party Advertising</strong></span></p>
				<p>We use several third-party advertising companies to serve ads when you visit <?php echo $d['domainname']; ?>. These companies may use information (not including your name, address, email address or telephone number) about your visits to this and other Web sites in order to provide advertisements on this site and other sites about goods and services that may be of interest to you.</p>
				<p>If you would like more information about this practice and to know your choices about not having this information used by these companies, please <a href="http://www.networkadvertising.org/optout_nonppii.asp" target="_blank">click here</a>.</p>
				<p><span style="text-decoration: underline;"><strong>Links to Other Sites</strong></span></p>
				<p><?php echo $d['domainname']; ?> has links to partners and other sites. When you link to another site, you are no longer on our site and are subject to the privacy policy of the new site.</p>
				<p><span style="text-decoration: underline;"><strong>Restriction of Liability</strong></span></p>
				<p><?php echo $d['domainname']; ?> makes no claims, promises or guarantees about the accuracy, completeness, or adequacy of the contents of this website and expressly disclaims liability for errors and omissions in the contents of this website.</p>
				<p>No warranty of any kind, implied, expressed or statutory, including but not limited to the warranties of non-infringement of third party rights, title, merchantability, fitness for a particular purpose and freedom from computer virus, is given with respect to the contents of this website or its hyperlinks to other Internet resources.</p>
				<p>Reference in this website to any specific commercial products, processes, or services, or the use of any trade, firm or corporation name is for the information and convenience of the public, and does not constitute endorsement, recommendation, or favoring by <?php echo $d['domainname']; ?></p>
				<p><span style="text-decoration: underline;"><strong>Amendments to this Privacy Policy</strong></span></p>
				<p>We may amend this Privacy Policy at any time. If we make any material changes in how we collect, use, or share your personal information, we will prominently post notice of the changes at this URL. Any material changes to this Privacy Policy will be effective when posted.</p>
				<p>Your continued use of this site following the posting of any amendment, modification or change shall constitute your acceptance thereof.</p>
			</div>

	<?php 
			} elseif ($_GET['p']=='dmca') {
				?>

				<div class="col-md-9">
					<h1 class="h1-single">DMCA</h1>
					<div class="custom-hr"><i>Published by <a href="">admin</a></i></div>
			
				    <p>&nbsp;</p>
				    <h3>Procedure  for Making Claims of Copyright Infringement</h3>
				    <p>If you  want unauthorized content removed from <?php echo $d['domainname']; ?>, please read the  instructions below: <br>
				      It is <?php echo $d['domainname']; ?>’s  policy to work with copyright owners to protect their intellectual property and  to insure that unauthorized content is not distributed via the <?php echo $d['domainname']; ?> network. <br>
				  If you  believe in good faith that any material provided through the Service infringes  upon your copyright, you may send notice to <?php echo $d['domainname']; ?> requesting that the  material or access to the material be removed, pursuant to the Digital  Millennium Copyright Act ("DMCA"), by providing our Copyright Agent  with the following information in writing (see 17 U.S.C 512(c)(3) and <a href="http://www.loc.gov/copyright">http://www.loc.gov/copyright</a> for  further details). The notice must include all of the following: </p>
				    <ol start="1" type="1">
				      <li>A physical or electronic signature of a       person authorized to act on behalf of the owner of an exclusive right that       is allegedly infringed. (Simply typing your name at the end of an email or       electronically transmitted letter will suffice as an "electronic       signature.") </li>
				      <li>Identification of the copyrighted work       claimed to have been infringed, or, if multiple copyrighted works at a       single online site are covered by a single notification, a representative       list of such works at that site. (You can give us a list of the       copyrighted works you own and a brief description of the works, attach a       copy of the works or send us the URL for a website that displays the works       you own.) </li>
				      <li>Identification of the material that is       claimed to be infringing or to be the subject of infringing activity and       that is to be removed or access to which is to be disabled, and       information reasonably sufficient to permit the service provider to locate       the material.</li>
				      <li>Information reasonably sufficient to       permit <?php echo $d['domainname']; ?> to contact you, such as an address, telephone number,       and, if available, an electronic mail address at which the complaining       party may be contacted. </li>
				      <li>A statement that you "have a good       faith belief that use of the material in the manner complained of is not       authorized by the copyright owner, its agent, or the law." (You can       simply copy this statement and put it in your letter, as long as the       statement is true.) </li>
				      <li>A statement that "the information       in the notification is accurate, and under penalty of perjury, that the       complaining party is authorized to act on behalf of the owner of an       exclusive right that is allegedly infringed." (You can simply copy       this statement and put it in your letter, as long as the statement is       true.) </li>
				    </ol>
				    <p>Without  such information <?php echo $d['domainname']; ?> cannot reasonably comply with its obligations to  intellectual property owners and to the members of the <?php echo $d['domainname']; ?> community. <br>
				      Please  note that under Section 512(f) of the Copyright Act, any person who knowingly  materially misrepresents that material or activity was removed or disabled by  mistake or misidentification may be subject to liability. <br>
				      Be  assured that <?php echo $d['domainname']; ?> is designed to fully respect intellectual property  rights. <?php echo $d['domainname']; ?> has proprietary software that allows it to block infringing  material once taken down from being "re-posted" by anyone. <?php echo $d['domainname']; ?>  enforces and will continue to enforce its Terms of Service which strictly  prohibit the public posting of copyrighted material to which the poster does  not have rights and together with the aforementioned activities <?php echo $d['domainname']; ?> brings  further protection to content owners seeking to prohibit the distribution of  their copyrighted works, while offering a user the best collaborative mobile  platform. <br>
				      Please  also be advised that we enforce a policy that provides for the termination in  appropriate circumstances of subscribers who are repeat infringers. <br>
				      Please  note that <?php echo $d['domainname']; ?> operates globally and had adopted this policy to meet the  many legal requirements it must comply with. <br>
				      For more  information about the <?php echo $d['domainname']; ?> Terms of Service, please see <a href="http://<?php echo $d['domainname']; ?>/p/terms">http://<?php echo $d['domainname']; ?>/p/terms</a> &nbsp;<br>
				  <br>
				      Email: <a href="mailto:contect@<?php echo $d['domainname']; ?>">contect@<?php echo $d['domainname']; ?></a></p>
				    <p>&nbsp;</p>
				    <h3>Counter  Notification</h3>
				    <p>If you  believe in good faith that a notice of copyright infringement has been wrongly  filed against you, you may send <?php echo $d['domainname']; ?> a counter-notice. All notices with  respect to <?php echo $d['domainname']; ?> should be sent to the <?php echo $d['domainname']; ?>. <?php echo $d['domainname']; ?> suggests  that you consult your legal advisor before filing a notice or counter-notice.  You expressly acknowledge and agree that <?php echo $d['domainname']; ?> shall not be liable to you  under any circumstances for declining to replace material. Also, be aware that  there can be penalties for false claims under the DMCA. </p>
				<p>&nbsp;</p>
				</div>

				<?php
			} elseif ($_GET['p']=='terms') {
				?>

				<div class="col-md-9">
					<h1 class="h1-single">Terms and Conditions</h1>
					<div class="custom-hr"><i>Published by <a href="">admin</a></i></div>
					<br />
					<p>
					The following is a legal agreement between you and the owners and operators of <?php echo $d['domainname']; ?> 
					By using this Website You agree to be bound by these Terms. This agreement may be revised or updated without notice.
					</p>

					<p><b>Downloading and using resource</b></p>
					  <ul>
					      <li>
					        designer are provided free of charge and under the licence they want.      
					      </li>
					      <li>
					        You agree never to advertise the resource as your own work or portray yourself as the author of said work. </li>
					      <li>
					        <?php echo $d['domainname']; ?> cannot be held responsible for any copyright violations, and cannot guarantee the legality of the resource stored in our system. If You want to make sure, always contact the author. You use the site and the resource at your own risk!

					      </li>
					  </ul>


					<p><b>Uploading resource</b></p>
					  <ul>
					      <li>
					        You may upload resource to the Website, and <?php echo $d['domainname']; ?> will screen these uploads to see and downloadable if they are suitable for distribution.
					      </li>
					      <li>
					        By uploading, You own the rights to release the resource.
					      </li>
					      <li>
					        <?php echo $d['domainname']; ?> does not allow the upload of Images that infringe on any copyright, property right, trademark or any other applicable right.
					      </li>
					      <li>
					         even though We do our best to prevent infringe happening, <?php echo $d['domainname']; ?> cannot be held responsible for the misuse or abuse of any resource.
					      </li>
					      <li>
					        We also reserve the right to remove any resource at any time if We believe it's defective, of poor quality or infringe on any right.
					      </li>
					  </ul>
				</div>

				<?php
			} elseif ($_GET['p']=='contact') {
				?>

				<div class="col-md-9">
					<h1 class="h1-single">Contact US</h1>
					<div class="custom-hr"></div><br />
					<form>
						<input type="text" class="form-control celah" placeholder="Your Name" name="fullname" required />
						<input type="text" class="form-control celah" placeholder="Your Email" name="email" required />
						<input type="text" class="form-control celah" placeholder="Subject" name="Subject" required />
						<textarea class="form-control celah" rows="7" name="message" placeholder="Your Message"></textarea>
						<input type="submit" name="contact" class="btn btn-primary celah" value="Send" />
					</form>
				</div>

				<?php
			}
		} 
	?>
</div>
<!-- END OF CONTENT HERE -->
<?php
	require_once('footer.php'); ?>