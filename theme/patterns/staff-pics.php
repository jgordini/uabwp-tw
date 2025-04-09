<?php
/**
 * Title: Staff Pictures With Dropdown Filter
 * Slug: uabwp-tw/staff-pics
 * Categories: uabwp-tw, staff
 * Description: A grid of staff members with their information and a dropdown filter.
 */
?>

<div class="container mx-auto px-12 py-6 mb-16">

    <div class="mb-6 staff-filter">
        <select class="border border-gray-200 rounded px-4 py-2 bg-white">
            <option value="">Filter Staff</option>
            <option value="academic">Academic Affairs</option>
            <option value="administrative">Administrative</option>
            <option value="research">Research</option>
        </select>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="flex flex-row gap-4 staff-card" data-category="administrative">
            <figure class="w-1/3 aspect-portrait object-cover">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/headshots/gabriela-oates.jpg"
                    alt="Gabriela Oates headshot" />
            </figure>
            <div class="w-2/3 pt-2 flex flex-col justify-center not-prose">
                <h3 class="text-black font-bold text-xl mb-2">Gabriela Oates</h3>
                <p class="text-black text-lg m-0">Director of Marketing</p>
                <p class="text-black text-lg m-0">Sterne Library 2234</p>
                <p class="text-black text-lg m-0">(205) 934-7890</p>
            </div>
        </div>

        <div class="flex flex-row gap-4 staff-card" data-category="academic">
            <figure class="w-1/3 aspect-portrait object-cover">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/headshots/hirotaka-ata.jpg"
                    alt="Hirotaka Ata headshot" />
            </figure>
            <div class="w-2/3 pt-2 flex flex-col justify-center not-prose">
                <h3 class="text-black font-bold text-xl mb-2">Hirotaka Ata</h3>
                <p class="text-black text-lg m-0">Associate Professor</p>
                <p class="text-black text-lg m-0">Campbell Hall 302</p>
                <p class="text-black text-lg m-0">(205) 975-1234</p>
            </div>
        </div>

        <div class="flex flex-row gap-4 staff-card" data-category="research">
            <figure class="w-1/3 aspect-portrait object-cover">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/headshots/amari-mukura.jpg"
                    alt="Amari Mukura headshot" />
            </figure>
            <div class="w-2/3 pt-2 flex flex-col justify-center not-prose">
                <h3 class="text-black font-bold text-xl mb-2">Amari Mukura</h3>
                <p class="text-black text-lg m-0">Research Coordinator</p>
                <p class="text-black text-lg m-0">Lister Hill Library 510</p>
                <p class="text-black text-lg m-0">(205) 996-4567</p>
            </div>
        </div>

        <div class="flex flex-row gap-4 staff-card" data-category="administrative">
            <figure class="w-1/3 aspect-portrait object-cover">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/headshots/carla-provost.jpg"
                    alt="Carla Provost headshot" />
            </figure>
            <div class="w-2/3 pt-2 flex flex-col justify-center not-prose">
                <h3 class="text-black font-bold text-xl mb-2">Carla Provost</h3>
                <p class="text-black text-lg m-0">Student Services Coordinator</p>
                <p class="text-black text-lg m-0">Hill Student Center 150</p>
                <p class="text-black text-lg m-0">(205) 934-8721</p>
            </div>
        </div>

        <div class="flex flex-row gap-4 staff-card" data-category="administrative">
            <figure class="w-1/3 aspect-portrait object-cover">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/headshots/abby-cook.jpg"
                    alt="Abby Cook headshot" />
            </figure>
            <div class="w-2/3 pt-2 flex flex-col justify-center not-prose">
                <h3 class="text-black font-bold text-xl mb-2">Abby Cook</h3>
                <p class="text-black text-lg m-0">Communications Specialist</p>
                <p class="text-black text-lg m-0">Administration Building 450</p>
                <p class="text-black text-lg m-0">(205) 934-1122</p>
            </div>
        </div>

        <div class="flex flex-row gap-4 staff-card" data-category="academic">
            <figure class="w-1/3 aspect-portrait object-cover">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/headshots/lauren-fox-hall.jpg"
                    alt="Lauren Fox-Hall headshot" />
            </figure>
            <div class="w-2/3 pt-2 flex flex-col justify-center not-prose">
                <h3 class="text-black font-bold text-xl mb-2">Lauren Fox-Hall</h3>
                <p class="text-black text-lg m-0">Academic Advisor</p>
                <p class="text-black text-lg m-0">Heritage Hall 305</p>
                <p class="text-black text-lg m-0">(205) 975-3344</p>
            </div>
        </div>
        <?php  // End foreach loop ?>
    </div> <!-- Close grid container div -->

    <!-- Script removed - enqueued via functions.php -->
</div> <!-- Close main container div -->