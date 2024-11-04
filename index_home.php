<?php $home = true;
   $title = "Meta tag generator || Preview, edit, and generate meta tags with the Meta Tag Generator";
   $description = "With This Meta Tags, you can edit and experiment with your content, and then preview how your webpage will look on Google, Facebook, Twitter, and many other search engines!";
   include'header.php';
   ?>
<div class="mt-5 bg-white p-4 rounded shadow-sm border">
   <div class="row">
      <div class="col-12 col-sm-2">
         <h5 class="m-0 p-0 mb-5 text-muted show">Channels</h5>
         <h5 class="Channels m-0 p-0 mb-4" onclick="codehap_networks('Channels')">Channels</h5>
         <div id="codehapChannels" class="show">
            <div id="btn_google" onclick="codehap_networks('google')" class="codehap codehap_active">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                  <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
               </svg>
               <span>Google</span>
            </div>
            <div id="btn_facebook" onclick="codehap_networks('facebook')" class="codehap codehap_active d-flex align-items-center">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
               </svg>
               <span>facebook</span>
            </div>
            <div id="btn_twitter" onclick="codehap_networks('twitter')" class="codehap codehap_active d-flex align-items-center">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
               </svg>
               <span>twitter</span>
            </div>
            <div id="btn_linkedin" onclick="codehap_networks('linkedin')" class="codehap d-flex align-items-center">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
               </svg>
               <span>linkedin</span>
            </div>
            <div id="btn_pinterest" onclick="codehap_networks('pinterest')" class="codehap d-flex align-items-center">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="currentColor" class="bi bi-pinterest" viewBox="0 0 16 16">
                  <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z"/>
               </svg>
               <span>Pinterest</span>
            </div>
            <div id="btn_slack" onclick="codehap_networks('slack')" class="codehap d-flex align-items-center">
               <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M22.672 15.218l-2.431.809.84 2.515c.33 1.018-.21 2.126-1.23 2.456-.21.06-.45.12-.661.09-.78-.03-1.531-.54-1.801-1.318l-.84-2.515-5.014 1.676.84 2.516c.33 1.018-.21 2.126-1.23 2.455-.21.06-.45.12-.661.09-.78-.03-1.531-.539-1.801-1.318l-.84-2.515-2.433.809c-.21.06-.45.12-.66.09-.78-.03-1.531-.54-1.801-1.318-.33-1.018.21-2.126 1.23-2.455l2.432-.809-1.62-4.821-2.433.809c-.21.06-.45.12-.66.09-.78-.03-1.531-.54-1.801-1.318-.33-1.018.21-2.126 1.23-2.456l2.432-.808-.84-2.515c-.33-1.019.21-2.126 1.23-2.456 1.021-.33 2.132.21 2.462 1.228l.84 2.515 5.014-1.677-.84-2.515c-.33-1.018.21-2.126 1.23-2.455 1.021-.33 2.132.21 2.462 1.227l.84 2.516 2.433-.809c1.02-.33 2.131.21 2.461 1.228.33 1.018-.21 2.126-1.23 2.455l-2.432.809 1.62 4.82 2.433-.808c1.02-.33 2.131.21 2.461 1.228.33 1.018-.21 2.126-1.23 2.455zm-13.89-4.905l1.616 4.827 5.01-1.678-1.617-4.827-5.01 1.678z"   fill-rule="evenodd"></path>
               </svg>
               <span>Slack</span>
            </div>
         </div>
         <div class="show">
            <h3 class="mt-5 h6">Official Debuggers</h3>
            <ul class="ul">
               <li class="mx-1 mt-3"><a href="https://developers.facebook.com/tools/debug/" target="_blank" class="text-decoration-none text-dark">Facebook</a></li>
               <li class="mx-1 mt-3"><a href="https://cards-dev.twitter.com/validator" target="_blank" class="text-decoration-none text-dark">Twitter</a></li>
               <li class="mx-1 mt-3"><a href="https://www.linkedin.com/post-inspector/inspect/" target="_blank" class="text-decoration-none text-dark">Linkedin</a></li>
               <li class="mx-1 mt-3"><a href="https://search.google.com/structured-data/testing-tool/u/0/" target="_blank" class="text-decoration-none text-dark">Structured Data</a></li>
            </ul>
         </div>
      </div>
      <div class="col-12 col-sm-4">
         <h5 class="m-0 p-0 mb-5 text-muted">Metadata</h5>
         <h4 class="mt-3 h6 d-flex justify-content-between align-items-center text-muted"><span>Image</span> <span class="small">Recommend 1200×628</span></h4>
         <label for="input" class="index-metadata__image" id="js-image" style="background-image: url(<?=$default_image?>)">
            <div class="index-metadata__image-button">
               <div class="index-metadata__image-button-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="24" viewBox="0 0 22 24">
                     <g fill="none" fill-rule="evenodd" stroke="<?=$themeColour?>" stroke-width="4" transform="translate(2 3)">
                        <polyline points="0 9 9 0 18 9"></polyline>
                        <path d="M9,0 L9,21"></path>
                     </g>
                  </svg>
               </div>
               <div class="index-metadata__image-button-text">Drag &amp; Drop or Click</div>
            </div>
         </label>
         <input id="input" class="js-image-input"  onchange="loadFile(event)" type="file" style="display:none">
         <h4 class="mt-5 h6 d-flex justify-content-between align-items-center text-muted"><span>Title</span> <span id="titlelen">87</span></h4>
         <textarea id="title" class="form-control" rows="2"><?=$default_title?></textarea>
         <h4 class="mt-5 h6 d-flex justify-content-between align-items-center text-muted"><span>Description</span> <span id="descriptionlen">172</span></h4>
         <textarea id="description" class="form-control" rows="5"><?=$default_description?></textarea>
      </div>
      <div class="col-12 col-sm-6">
         <div class="mb-5  d-flex justify-content-between align-items-center">
            <h5 class="m-0 p-0 text-muted">PREVIEW</h5>
            <form id="codehap_form" class="m-0">
               <input type="hidden" id="form_title" name="form_title" value="<?=$default_title?>">
               <input type="hidden" id="form_description" name="form_description" value="<?=$default_description?>">
               <input type="hidden" id="form_image" name="form_image" value="<?=$default_image?>">
               <input type="hidden" id="form_url" name="form_url" value="<?=$default_url?>">
               <button id="codehap_submit" type="submit" class="m-0 btn-sm btn btn-primary d-flex justify-content-between align-items-center" data-bs-toggle="modal" data-bs-target="#codehap_model">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
                     <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"/>
                  </svg>
                  <span>&nbsp;Generate Meta Tags</span>
               </button>
            </form>
         </div>
         <!-- Modal -->
         <div class="modal fade" id="codehap_model" tabindex="-1" aria-labelledby="codehap_modelLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
               <div class="modal-content">
                  <div class="modal-header d-flex align-items-center">
                     <h3 class="modal-title m-0 p-0" id="codehap_modelLabel">Your Meta Tags</h3>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <div class="border p-2 rounded bg-light text-muted d-flex align-items-center">
                        <svg width="22" height="19" viewBox="0 0 22 19" xmlns="http://www.w3.org/2000/svg">
                           <g transform="translate(1)" fill="none" fill-rule="evenodd">
                              <path d="M.838 16.51L9.253 1.55a1 1 0 0 1 1.744 0l8.415 14.96A1 1 0 0 1 18.54 18H1.71a1 1 0 0 1-.872-1.49z" stroke="#18283E" stroke-width="2"></path>
                              <path d="M10 7v5" stroke="#18283E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              <circle fill="#18283E" cx="10" cy="15" r="1"></circle>
                           </g>
                        </svg>
                        <span>&nbsp;&nbsp; Warning:  Be sure to upload your image to your CMS or host.</span>
                     </div>
                     <div class="dl-loading-video mt-2" style="display:none;">Loading...</div>
                     <div class="dl-links-video"></div>
                     <div class="text-muted d-flex justify-content-between align-items-center px-2">
                        <div>
                           Copy the code into your website <code>&lt;head&gt;</code>
                        </div>
                        <button onclick="copy_data(select_txt)" type="button" id="codehap_copy_button" class="btn btn-primary d-flex justify-content-between align-items-center">
                           <svg width="20" height="20" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 115.77 122.88" style="enable-background:new 0 0 115.77 122.88" xml:space="preserve">
                              <style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style>
                              <g>
                                 <path class="st0" d="M89.62,13.96v7.73h12.19h0.01v0.02c3.85,0.01,7.34,1.57,9.86,4.1c2.5,2.51,4.06,5.98,4.07,9.82h0.02v0.02 v73.27v0.01h-0.02c-0.01,3.84-1.57,7.33-4.1,9.86c-2.51,2.5-5.98,4.06-9.82,4.07v0.02h-0.02h-61.7H40.1v-0.02 c-3.84-0.01-7.34-1.57-9.86-4.1c-2.5-2.51-4.06-5.98-4.07-9.82h-0.02v-0.02V92.51H13.96h-0.01v-0.02c-3.84-0.01-7.34-1.57-9.86-4.1 c-2.5-2.51-4.06-5.98-4.07-9.82H0v-0.02V13.96v-0.01h0.02c0.01-3.85,1.58-7.34,4.1-9.86c2.51-2.5,5.98-4.06,9.82-4.07V0h0.02h61.7 h0.01v0.02c3.85,0.01,7.34,1.57,9.86,4.1c2.5,2.51,4.06,5.98,4.07,9.82h0.02V13.96L89.62,13.96z M79.04,21.69v-7.73v-0.02h0.02 c0-0.91-0.39-1.75-1.01-2.37c-0.61-0.61-1.46-1-2.37-1v0.02h-0.01h-61.7h-0.02v-0.02c-0.91,0-1.75,0.39-2.37,1.01 c-0.61,0.61-1,1.46-1,2.37h0.02v0.01v64.59v0.02h-0.02c0,0.91,0.39,1.75,1.01,2.37c0.61,0.61,1.46,1,2.37,1v-0.02h0.01h12.19V35.65 v-0.01h0.02c0.01-3.85,1.58-7.34,4.1-9.86c2.51-2.5,5.98-4.06,9.82-4.07v-0.02h0.02H79.04L79.04,21.69z M105.18,108.92V35.65v-0.02 h0.02c0-0.91-0.39-1.75-1.01-2.37c-0.61-0.61-1.46-1-2.37-1v0.02h-0.01h-61.7h-0.02v-0.02c-0.91,0-1.75,0.39-2.37,1.01 c-0.61,0.61-1,1.46-1,2.37h0.02v0.01v73.27v0.02h-0.02c0,0.91,0.39,1.75,1.01,2.37c0.61,0.61,1.46,1,2.37,1v-0.02h0.01h61.7h0.02 v0.02c0.91,0,1.75-0.39,2.37-1.01c0.61-0.61,1-1.46,1-2.37h-0.02V108.92L105.18,108.92z"/>
                              </g>
                           </svg>
                           <span>&nbsp;Copy</span>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="google" class="metadata-group__display is-active">
            <h4 class="metadata-group__title"><span>Google</span></h4>
            <div class="card-seo-google">
               <span class="card-seo-google__title js-preview-title" id="google_titlevalue"><?=$default_title?></span>
               <div class="card-seo-google__url">
                  <span class="card-seo-google__url-title js-preview-domain" id="google_url"><?=$current_url?></span>
                  <span class="card-seo-google__url-arrow"></span>
               </div>
               <span class="card-seo-google__description js-preview-description" id="google_descriptionvalue">
               <?=$default_description?>
               </span>
            </div>
         </div>
         <div id="facebook" class="metadata-group__display is-active">
            <h4 class="metadata-group__title"><span>Facebook</span></h4>
            <div class="card-seo-facebook">
               <div class="card-seo-facebook__image js-preview-image" id="fbimg" style="background-image: url(<?=$default_image?>)"></div>
               <div class="card-seo-facebook__text">
                  <span class="card-seo-facebook__link js-preview-domain" id="fbdomain"><?=$host?></span>
                  <div class="card-seo-facebook__content">
                     <div style="margin-top:5px">
                        <div class="card-seo-facebook__title js-preview-title" id="fb_titlevalue"><?=$default_title?></div>
                     </div>
                     <span class="card-seo-facebook__description js-preview-description" id="fb_descriptionvalue"><?=$default_description?></span>
                  </div>
               </div>
            </div>
         </div>
         <div id="twitter" class="metadata-group__display is-active">
            <h4 class="metadata-group__title"><span>Twitter</span></h4>
            <div class="card-seo-twitter">
               <div class="card-seo-twitter__image js-preview-image"  id="twimg" style="background-image: url(<?=$default_image?>)"></div>
               <div class="card-seo-twitter__text">
                  <span class="card-seo-twitter__title js-preview-title" id="tw_titlevalue"><?=$default_title?></span>
                  <span class="card-seo-twitter__description js-preview-description" id="tw_descriptionvalue"><?=$default_description?></span>
                  <span class="card-seo-twitter__link js-preview-domain" id="twdomain"><?=$host?></span>
               </div>
            </div>
         </div>
         <div id="linkedin" class="metadata-group__display ">
            <h4 class="metadata-group__title"><span>Linkedin</span></h4>
            <div class="card-seo-linkedin">
               <div class="card-seo-linkedin__image js-preview-image"  id="liimg" style="background-image: url(<?=$default_image?>)"></div>
               <div class="card-seo-linkedin__text">
                  <div class="card-seo-linkedin__content">
                     <div class="card-seo-linkedin__title js-preview-title" id="li_titlevalue"><?=$default_title?></div>
                     <span class="card-seo-linkedin__link js-preview-domain" id="lidomain"><?=$host?></span>
                  </div>
               </div>
            </div>
         </div>
         <div id="pinterest" class="metadata-group__display ">
            <h4 class="metadata-group__title"><span>Pinterest</span></h4>
            <div class="card-seo-pinterest">
               <div class="card-seo-pinterest__image">
                  <img class="js-preview-img img-fluid" id="pinimg" src="<?=$default_image?>">
               </div>
               <div class="card-seo-pinterest__content">
                  <div class="card-seo-pinterest__title js-preview-title" id="pin_titlevalue"><?=$default_title?></div>
                  <div class="card-seo-pinterest__dots">
                     <div class="card-seo-pinterest__dot"></div>
                     <div class="card-seo-pinterest__dot"></div>
                     <div class="card-seo-pinterest__dot"></div>
                  </div>
               </div>
            </div>
         </div>
         <div id="slack" class="metadata-group__display ">
            <h4 class="metadata-group__title"><span>Slack</span></h4>
            <div class="card-seo-slack">
               <div class="card-seo-slack__bar"></div>
               <div class="card-seo-slack__content">
                  <div class="flex">
                     <img class="card-seo-slack__favicon js-preview-favicon" id="slackicon" src="<?=$default_icon?>"> <span class="card-seo-slack__link js-preview-site-name" id="slackdomain"><?=$host?></span>
                  </div>
                  <div class="card-seo-slack__title js-preview-title" id="slack_titlevalue"><?=$default_title?> </div>
                  <span class="card-seo-slack__description js-preview-description" id="slack_descriptionvalue"><?=$default_description?></span>
                  <div class="card-seo-slack__image js-preview-image js-slack-image"  id="slackimg" style="background-image: url(<?=$default_image?>)"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="mt-5 bg-white p-5 rounded shadow-sm border codehap_main">
   <h1>Meta Tags</h1>
   <p>Meta Tags is a tool to debug and generate meta tag code for any website. With Meta Tags you can edit and experiment with your content then preview how your webpage will look on Google, Facebook, Twitter and more!</p>
   <h2>What are Meta Tags</h2>
   <p>Meta tags are specific snippets of text and image content that provide a summary for a webpage. Often meta tag data shows up whenever someone shares a link on social media, in messaging, or in your business chat software ?.</p>
   <p>In addition meta tags can contain information to help search engines and other technical services scan your site to figure out what it’s all about and whether or not it’s legit!</p>
   <p>Wait, but why can’t I see meta data? Since the protocol was originally created for machines to examine, it is buried in code at the top of a website, which is exactly why this tool was created! Put any URL in the search box and our site helps you both visualize and edit the meta tag code so you can update it.</p>
   <br> 
   <code>&lt;title&gt;Meta Tags — Preview, Edit and Generate&lt;/title&gt;</code>
   <br>
   <code>&lt;meta name="title" content="Meta Tags — Preview, Edit and Generate"&gt;</code>
   <br>
   <code>&lt;meta name="description" content="With Meta Tags you can edit and experiment with your content then preview how your webpage will look on Google, Facebook, Twitter and more!"&gt;
   </code>
   <br><br>
   <p>Meta Tags — Preview, Edit and Generate</p>
   <p>https://example.com/</p>
   With Meta Tags you can edit and experiment with your content then preview how your webpage will look on Google, Facebook, Twitter and more!
   <h2>Why Do Meta Tags Matter</h2>
   <p>How valuable sharing on social media and ranking in Google are for your site determines how significantly you should focus on your meta tags.</p>
   <p>Imagine walking into an abandoned store with shelves full of dust and a musty smell in the air ?. A link to your site on Facebook or LinkedIn is often the very first interaction you have with a visitor and if it looks empty and unmaintained like a barren store, they’ll never even consider clicking the link.</p>
   <p>As part of most digital marketing campaigns, teams often create compelling copy and striking images, which conveniently lends itself perfectly to being a part of the meta data of your webpage. Double the value, half the work!</p>
   <p>Moreover generating meta data can be an important exercise in developing your concise sales pitch. Google only gives you 60 characters for your title and about 105 characters for your description—the perfect opportunity to tightly refine your value proposition.</p>
   <h2>Do Meta Tags Help with SEO</h2>
   <p>The SEO community is definitive on this topic, the most important meta tag for ranking is your title tag. No other meta tags affect SEO rankings but...that's not to say they're unimportant!</p>
   <ul>
      <li><strong>Title</strong> - Very Important.</li>
      <li><strong>Description</strong> - Less Important.</li>
      <li><strong>Image</strong> - Moderately Important.</li>
      <li><strong>Keyword</strong> - Negative Importance.</li>
   </ul>
   <p>Historically the "keyword" meta tag was a significant part of ranking, since early search engine robots used that value to categorize websites. But in 2009 <a href="https://webmasters.googleblog.com/2009/09/google-does-not-use-keywords-meta-tag.html">Google made it official</a>, the keyword meta tag is no longer a part of ranking and would potentially hurt your ranking if it is abused ?.</p>
   <p>Instead modern SEO strategies focus on ranking highly in Google with high quality content and are supplemented with meta tag tweaks.</p>
   <p>Once you start ranking it's important that people actually click on your site which is where other parts of meta tag data plays an important role especially the meta image and meta description (read more below).</p>
   <h2>Title Tag</h2>
   <p>A title tag is the second most important factor for on-page SEO, only trailing high quality content.</p>
   <p>In technical terms it is a very simple html code tag &lt;title&gt;Title&lt;/title&gt; which you place at the very top of your webpage. But its simplicity is only hiding the fact that the 50-60 characters that Google gives you will affect your website traffic in several ways.</p>
   <ul>
      <li><strong>Google Search</strong> - The main link that people click on.</li>
      <li><strong>Social Sites</strong> - The title people see on FB, Linkedin, etc.</li>
      <li><strong>Browser Tab</strong> - Subliminal marketing that persists in a tab.</li>
      <li><strong>External Links</strong> - Commonly the text other sites use to link to your site.</li>
   </ul>
   <h3>Tips for an effective title</h3>
   <p>Consider the trifecta: Brand, marketing, and SEO. Keep the your title around 60 characters and put the keywords you’re focusing on first. Don't go overboard with keywords, at most stick to two. Backlinko does a fantastic job describing <a href="https://backlinko.com/on-page-seo">how to develop clickable titles</a> in this monster guide to on page SEO.</p>
   Places where your title tag shows up
   <h2>Meta Description</h2>
   <p>Meta descriptions while not useful for SEO reasons are incredibly valuable for engaging users who will click through to your site.</p>
   <p>The meta description often serves as a pitch to people who find your website on Google or social media sites. While it's not required and Google can use text from you website instead of what you specifiy in the meta data, it's better to control the description text where you can.</p>
   <p>Want to learn more? Moz is the authority in the SEO world and has an actionable guide to <a href="https://moz.com/learn/seo/meta-description">writing compelling descriptions</a>.</p>
   <h2>Meta Image or OG:Image</h2>
   <p>With the visual nature of the web your Meta Tag Image is the most valuable graphic content you can create to encourage users to click and visit your website.</p>
   <p>Most digital marketing and SEO websites ignore the value of graphic content since it requires design skills. But with free tools like Figma and Canva, anyone can create compelling imagery to add to their meta tags.</p>
   <p>On sites like Facebook, Twitter, and Linkedin, your meta image is 3x larger than your text content!</p>
   <h2>Create Meta Tags for SEO and Digital Marketing</h2>
   <p>As meta tag data can be overwhelming and your time is limited, you should focus on two things: title tag and meta image.</p>
   <p>The primary reason for building this tool is that it’s incredible difficult to focus on the main factors that matter for meta tags. Iterating on titles and images (and descriptions) is painful!</p>
   <p>Example.com was created to make this process enjoyable! Quickly testing different titles and images is a fluid, seamless workflow.</p>
</div>
