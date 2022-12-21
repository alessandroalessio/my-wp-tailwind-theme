<?php 
/**
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage Eazy 2021
 * @since Eazy 1.0
 */
get_header(); ?>

<div id="hero">
    <!-- <video src="https://colani.com/assets/video/ocean-waves.mp4" class="bg-video" muted="" loop="" autoplay="" playsinline="" poster="https://colani.com/assets/images/video/ocean-waves_thumb.jpg"></video> -->
    <div class="max-w-7xl m-auto pt-8 mb-48">
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="title-sitename-image max-w-xl mb-16 px-12 md:px-0 pt-12 md:pt-0">
                <?php the_post_thumbnail(); ?>
            </div>
        <?php endif; ?>
        <!-- <h1 class="title-sitename py-24"><?php the_title(); ?></h1> -->
        <div class="max-w-2xl px-12 md:px-0"><?php the_content(); ?></div>
    </div>
</div>

<section id="section-1">
    <div class="max-w-7xl py-56 mx-12 md:m-auto">
        <div class="max-w-md font-extralight text-4xl">
            <?php
            $first_section_text = get_post_meta(get_the_ID(), 'first_section_text');
            if ( $first_section_text[0] ) echo $first_section_text[0];
            ?>
        </div>
    </div>
</div>

<div id="section-2">
    <div class="bg-black/50">
        <div class="max-w-7xl py-64 m-auto">
            <div class="text-center font-extralight text-xl">
                <?php
                $second_section_text = get_post_meta(get_the_ID(), 'second_section_text');
                $second_section_label_btn = get_post_meta(get_the_ID(), 'second_section_label_btn');
                $second_section_url_btn = get_post_meta(get_the_ID(), 'second_section_url_btn');
                if ( $second_section_text[0] ) echo $second_section_text[0];
                if ( $second_section_label_btn[0] ) : ?>
                    <a id="section-2-btn" href="<?php echo $second_section_url_btn[0]; ?>" class="mt-4 uppercase btn btn-bordered text-base font-bold px-8 py-3 mt-8"><?php echo $second_section_label_btn[0]; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php
$collections = get_post_meta( get_the_ID(), 'collection_repeat_group', true );
if ( count($collections)>0 ) : 
    foreach ( $collections AS $i => $collection ) : ?>
        <?php $collection = (object) $collection; ?>
        <section class="mt-6">
            <div class="md:flex <?php echo ( $i%2==0 ) ? 'md:flex-row' : 'md:flex-row-reverse'; ?>">
                <div class="md:flex-none md:w-3/12 md:m-24 md:relative py-24 md:py-0">
                    <h2 class="text-4xl font-thin tracking-wide text-primary text-center md:text-left"><?php echo $collection->title; ?></h2>
                    <div class="md:absolute md:bottom-0 md:left-0 block w-full text-center md:text-left pt-4 md:pt-0">
                        <a href="<?php echo $collection->url_button; ?>" title="<?php echo $collection->label_button; ?>" class="btn btn-bordered font-bold px-3 py-2"><?php echo $collection->label_button; ?></a>
                    </div>
                </div>
                <div class="grow overflow-hidden">
                    <div class="glide relative">
                        <div class="glide__track" data-glide-el="track">
                            <ul class="glide__slides">
                                <?php foreach ($collection->gallery AS $k => $img_src) : ?>
                                    <li class="glide__slide">
                                        <?php echo wp_get_attachment_image( $k, 'homepage-thumb' ); ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="glide__arrows" data-glide-el="controls">
                            <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" /></svg></button>
                            <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" /></svg></button>
                        </div>
                        <div class="glide__bullets" data-glide-el="controls[nav]">
                            <button class="glide__bullet" data-glide-dir="=0"></button>
                            <button class="glide__bullet" data-glide-dir="=1"></button>
                            <button class="glide__bullet" data-glide-dir="=2"></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach; ?>
<?php endif; ?>

<!-- <section class="product-section">
    <div class="max-w-7xl py-24 m-auto">
        <div class="flex justify-center">
            <a href="#" class="inline-flex border border-primary relative max-w-md mx-2">
                <img src="<?php echo get_template_directory_uri(); ?>/images/prodotto1.png" alt="">
                <h3 class="title-overlay absolute text-white uppercase w-full h-full z-10 pt-4 pl-4 font-extrabold text-primary tracking-widest">Nicchie</h3>
            </a>
            <a href="#" class="inline-flex border border-primary relative max-w-md mx-2">
                <img src="<?php echo get_template_directory_uri(); ?>/images/prodotto2.png" alt="">
                <h3 class="title-overlay absolute text-white uppercase w-full h-full z-10 pt-4 pl-4 font-bold text-primary tracking-widest">Canaline e Pipette</h3>
            </a>
        </div>
    </div>
</section> -->

<div id="section-last" class="mt-6">
    <div class="bg-black/50">
        <div class="max-w-7xl py-64 m-auto">
            <div class="text-center font-extralight text-xl">
                <?php
                $section_preform_text = get_post_meta(get_the_ID(), 'section_preform_text');
                $section_preform_label_btn = get_post_meta(get_the_ID(), 'section_preform_label_btn');
                $section_preform_url_btn = get_post_meta(get_the_ID(), 'section_preform_url_btn');
                if ( $section_preform_text[0] ) echo $section_preform_text[0];
                if ( $section_preform_label_btn[0] ) : ?>
                    <a id="section-preform-btn" href="<?php echo $section_preform_url_btn[0]; ?>" class="mt-4 uppercase btn btn-bordered text-base font-bold px-8 py-3 mt-8 mx-4"><?php echo $section_preform_label_btn[0]; ?></a>
                <?php endif; ?>
                <?php 
                $section_preform_label_btn_2 = get_post_meta(get_the_ID(), 'section_preform_label_btn_2');
                $section_preform_url_btn_2 = get_post_meta(get_the_ID(), 'section_preform_url_btn_2');
                if ( $section_preform_label_btn_2[0] ) : ?>
                    <a id="section-preform-btn-2" href="<?php echo $section_preform_url_btn_2[0]; ?>" class="mt-4 uppercase btn btn-bordered text-base font-bold px-8 py-3 mt-8 mx-4"><?php echo $section_preform_label_btn_2[0]; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div id="contact-form-wrapper">
    <div class="max-w-4xl mx-4 md:mx-auto my-12">
        <?php echo do_shortcode('[contact-form-7 id="29" title="Modulo di contatto 1"]'); ?>
    </div>
</div>


<?php get_footer(); ?>