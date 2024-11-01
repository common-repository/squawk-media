<?php
// Prevent this script from being accessed directly (not through the activated plugin)
if (!defined('ABSPATH')) die;

/**
 * @author Matias Escudero <matias@meweb.dev>
 */

class MEWEBDEV_SQKMDA_QuickReference
{
    function __construct()
    {
    }

    function get_page()
    {
    ?>
            
            <div class="wrap">

                <div style="margin-top: 1rem; margin-bottom: 2rem;">
                    <svg class="sqk-brand__logo" id="a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 388.5 347.42"><path d="m120.8,239.08c6.59,3.48,12.09,6.33,15.93,8.57l-12.73,10.58-27.49,22.84c-3.63,1-6.54,3.7-7.75,7.25-1.21,3.55-.57,7.54,1.64,10.52,7.86,10.46,33.21,26.75,64.88,38.16,12.26,4.41,25.46,8.09,38.97,10.42,13.51-2.33,26.71-6,38.97-10.42,31.67-11.41,57.02-27.7,64.88-38.16,2.2-2.99,2.84-6.97,1.64-10.52s-4.12-6.26-7.75-7.25l-27.49-22.84-12.73-10.58c3.85-2.24,9.34-5.09,15.93-8.57,40.06-21.12,120.8-65.36,120.8-136.72,0-45.43-10.52-78.27-18.34-94.55C367.67,2.77,362.41,0,356.8,0c-8.03,0-14.79,5.69-17.13,13.36-24.34,80.48-45.36,91.03-88.44,94.67-.07,0-.14.01-.21.02v-22.82s0-.92,0-.92v-21.75c0-31.39-25.39-56.81-56.77-56.87-.04,0-.07,0-.11,0h-70.88c-4.83,0-8.74,3.91-8.74,8.74,0,1.71.57,3.41,1.49,4.83l21.26,31.92v56.85c-43.08-3.64-64.09-14.19-88.44-94.67C46.49,5.69,39.74,0,31.71,0c-5.62,0-10.88,2.77-13.36,7.82C10.52,24.1,0,56.94,0,102.37c0,71.36,80.74,115.6,120.8,136.72Zm55.61-181.63c0-8.52,6.91-15.43,15.43-15.43s15.43,6.91,15.43,15.43c0,8.52-6.91,15.43-15.43,15.43s-15.43-6.91-15.43-15.43Z"/></svg>
                    <span class="sqk-brand__text">Squawk Images</span>
                </div>

                

                <div style="display: flex; padding-top: 2rem; margin-bottom: 3rem;">
                    <div style="margin-right: 1.5rem"><img class="thank-you-image" src="https://www.gravatar.com/avatar/9dd4027332edeef541eaf1df6a0afae9?s=200" alt="Matias Escudero WordPress Developer San Diego, CA"></div>
                    <div>
                        <h1 style="padding-top: 0;">Thank you!</h1>
                        <p class="help-intro-text">Thank you for installing my plugin. I'm so grateful for your support and interest in my work.</p>
                        <p class="help-intro-text">As a web developer, I'm passionate about creating products that make a difference in people's lives. I know how much hard work and dedication goes into making a product happen, so I truly appreciate you taking the time to try out mine.</p>
                        <p class="help-intro-text">I hope you enjoy this plugin. If you have any feedback or suggestions, please don't hesitate to <a href="https://meweb.dev/contact">reach out</a>. I'm always looking for ways to improve my products and make them more useful for my users.</p>
                        <p class="help-intro-text">Thank you again for your support. I really appreciate it!</p>
                        <p class="help-intro-text">Sincerely,<br><br>Matias Escudero<br><a target="_blank" rel="noopener noreferrer" href="https://meweb.dev">www.meweb.dev</a></p>
                    </div>
                </div>


                <h1>Quick Reference</h1>
                
                <p><strong><span style="font-size: 16px;">For your peace of mind:</span><br>This product itself does NOT collect or share ANY of your personal or your client's information.</strong></p>
                

                <div class="image-wrap" style="margin-top: 2rem;">
                    <h3 class="help-title">1. Add a new Squawk Images block</h3>
                    <p class="help-text">Click on the + button, search for Squawk Images and click on it.</p>
                    <img class="help-image" style="max-width: 100%; height: auto;" src="<?php echo esc_url(plugin_dir_url(__DIR__)) . 'media/images/sqk-imgs-quick-reference-1.webp'; ?>" alt="Squawk Images Quick Reference. Add block.">
                    <img class="help-image" style="max-width: 100%; height: auto;" src="<?php echo esc_url(plugin_dir_url(__DIR__)) . 'media/images/sqk-imgs-quick-reference-2.webp'; ?>" alt="Squawk Images Quick Reference. Search for squawk images and select squawk images ">
                    <img class="help-image" style="max-width: 100%; height: auto;" src="<?php echo esc_url(plugin_dir_url(__DIR__)) . 'media/images/sqk-imgs-quick-reference-3.webp'; ?>" alt="Squawk Images Quick Reference. Click on Upload to upload an image or select one from your library. Or click on Image URL to link an image hosted somewhere else. ">
                    <img class="help-image" style="max-width: 100%; height: auto;" src="<?php echo esc_url(plugin_dir_url(__DIR__)) . 'media/images/sqk-imgs-quick-reference-3-a.webp'; ?>" alt="Squawk Images Quick Reference. Picture of where to type the image URL. ">
                </div>
                
                <div class="image-wrap">
                    <h3 class="help-title">2. Add an image</h3>
                    <p class="help-text">Click on "Upload" to upload an image or "Image URL" if you want to add an image stored in a different server.</p>
                    <p class="help-text">The alt attribute is displayed if the image cannot be displayed, for example, if the user has a slow internet connection, if the image is blocked by a firewall, or if the user is using a screen reader. The alt attribute is also used by search engines to index and rank images. By providing descriptive alt text, you can help search engines understand what your images are about and improve your website's ranking in image search results.</p>
                    <p class="help-text">Here are some of the benefits of using alt text for images:</p>
                    <ul class="help-text">
                        <li class="help-list-item"><strong>Accessibility:</strong> Alt text makes your website more accessible to users who are visually impaired or who have other disabilities that prevent them from seeing images. Screen readers can read alt text to users, allowing them to understand the content of images even if they cannot see them.</li>
                        <li class="help-list-item"><strong>SEO:</strong> Alt text can help your website rank higher in image search results. When search engines crawl your website, they look at the alt text to understand what your images are about. If you have descriptive alt text, your images are more likely to be ranked in search results.</li>
                        <li class="help-list-item"><strong>User experience:</strong> Alt text can improve the user experience for all visitors to your website. If an image cannot be displayed, the alt text will provide users with information about what the image is supposed to be. This can help users to understand the content of your page, even if they cannot see all of the images.</li>
                    </ul>
                    <p class="help-text">Here are some examples of effective alt text:</p>
                    <ul class="help-text">
                        <li class="help-list-item"><strong>Image:</strong> A photo of a group of people hiking in the mountains.</li>
                        <li class="help-list-item"><strong>Alt text:</strong> A group of people hiking in the mountains on a sunny day.</li>
                        <li class="help-list-item"><strong>Image:</strong> A product photo of a red t-shirt.</li>
                        <li class="help-list-item"><strong>Alt text:</strong> A red t-shirt with a white logo.</li>
                    </ul>
                    <img class="help-image" style="max-width: 100%; height: auto;" src="<?php echo esc_url(plugin_dir_url(__DIR__)) . 'media/images/sqk-imgs-quick-reference-4.webp'; ?>" alt="Squawk Images Quick Reference. Select image from media library and add an alt text. ">
                </div>
                
                <div class="image-wrap">
                    <h3 class="help-title">3. Add a custom CSS class</h3>
                    <p class="help-text">Click on the uploaded image and you'll se a menu on the right. You can add custom CSS classes to your image. Just enter every CSS class followed by a space.</p>
                    <img class="help-image" style="max-width: 100%; height: auto;" src="<?php echo esc_url(plugin_dir_url(__DIR__)) . 'media/images/sqk-imgs-quick-reference-5.webp'; ?>" alt="Squawk Images Quick Reference. Add a custom CSS class. ">
                </div>
                
                <div class="image-wrap">
                    <h3 class="help-title">4. Check the "Responsive" checkbox to make this image responsive.</h3>
                    <p class="help-text">A responsive image is an image that is designed to adjust its size and resolution based on the size of the device or screen it is being viewed on. This allows images to look sharp and clear on any screen, whether it's a small smartphone screen or a large desktop monitor.</p>
                    <img class="help-image" style="max-width: 100%; height: auto;" src="<?php echo esc_url(plugin_dir_url(__DIR__)) . 'media/images/sqk-imgs-quick-reference-6.webp'; ?>" alt="Squawk Images Quick Reference. Check on Responsive to make the image responsive. ">
                </div>
                
                <div class="image-wrap">
                    <h3 class="help-title">5. Add a colored border or make the borders of your picture round.</h3>
                    <p class="help-text">In this section you can add a border, change the style and color of the border, make all the borders round at the same time or separatelly. You can also reset all changes by clicking the "Reset All" button.</p>
                    <img class="help-image" style="max-width: 100%; height: auto;" src="<?php echo esc_url(plugin_dir_url(__DIR__)) . 'media/images/sqk-imgs-quick-reference-6-a.webp'; ?>" alt="Squawk Images Quick Reference. Select the type of unit. Rem, px, vw, or % ">
                    <img class="help-image" style="max-width: 100%; height: auto;" src="<?php echo esc_url(plugin_dir_url(__DIR__)) . 'media/images/sqk-imgs-quick-reference-7.webp'; ?>" alt="Squawk Images Quick Reference. Tweak border roundness. ">
                </div>

                <h1>That's it! Enjoy!</h1>
                
            </div>

            <style>

                .thank-you-image
                {
                    border-radius: 0.5rem;
                    max-width: 100%;
                    height: auto;
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                }

                .help-image
                {
                    border-radius: 0.2rem;
                }

                .sqk-brand__logo
                {
                    width: 2rem;
                }
                
                .sqk-brand__text
                {
                    font-size: 1.7rem;
                    margin-left: 0.5rem;
                    letter-spacing: -1.8px;
                }

                .image-wrap
                {
                    display: flex;
                    flex-direction: column;
                    margin-bottom: 3rem;
                }

                .help-title
                {
                    
                }

                .help-image 
                {
                    margin-top: 0.5rem;
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                }

                .help-list-item
                {
                    margin-bottom: 0.5rem;
                }
                
                @media screen and (max-width: 768px) 
                {
                    .help-image, .help-text 
                    {
                        width: 100%;
                    }

                    
                }

                @media screen and (min-width: 769px) 
                {
                    .help-image, .help-text 
                    {
                        width: 50%;
                    }

                    .help-intro-text
                    {
                        width: 40%;
                    }
                }


            </style>
    <?php
    }
}
