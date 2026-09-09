<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title'             => 'Residential Interior Design',
                'subtitle'          => 'Transform Your Home Into a Living Masterpiece',
                'short_description' => 'From concept to completion, we craft bespoke residential interiors that reflect your personality, lifestyle, and aspirations — turning every room into a sanctuary you love coming home to.',
                'full_description'  => '<p>At Space Mystique, residential interior design is about creating spaces that tell your story. We begin with an in-depth discovery session to understand how you live, what inspires you, and the atmosphere you want to inhabit daily.</p>
<p>Our process covers every detail — floor plans and space optimization, material and finish selection, bespoke furniture curation, custom millwork, soft furnishings, art, and accessories. Whether your vision is a serene minimalist retreat, a warm eclectic haven, or a bold contemporary statement, our designers translate it into a cohesive, liveable reality.</p>
<p>We manage every vendor, artisan, and contractor so you can enjoy a stress-free transformation. The result is a home that feels unmistakably yours — polished, purposeful, and full of character.</p>
<ul>
  <li>Full-home and room-by-room design packages</li>
  <li>Concept boards, 3D renders, and material samples</li>
  <li>Custom furniture and built-in solutions</li>
  <li>End-to-end project coordination</li>
  <li>Move-in ready styling and final reveal</li>
</ul>',
                'meta_title'        => 'Residential Interior Design Services | Space Mystique',
                'meta_description'  => 'Bespoke residential interior design by Space Mystique. We craft personalised living spaces — from concept to move-in-ready styling — tailored to your lifestyle.',
                'status'            => 'active',
            ],
            [
                'title'             => 'Commercial Interior Design',
                'subtitle'          => 'Spaces That Work as Hard as You Do',
                'short_description' => 'We design commercial interiors — offices, retail stores, restaurants, and hospitality venues — that elevate brand identity, boost productivity, and create memorable experiences for every visitor.',
                'full_description'  => '<p>First impressions matter. A well-designed commercial space communicates your brand values before a single word is spoken. Space Mystique partners with businesses to create environments that are both functionally excellent and visually compelling.</p>
<p>We work across a wide range of commercial typologies including corporate offices, co-working spaces, boutique retail, F&amp;B establishments, hotels, and wellness centres. Our approach blends brand strategy with spatial design, ensuring every detail — from the reception desk to the restroom — reinforces a unified identity.</p>
<p>We coordinate with architects, MEP engineers, and fit-out contractors to deliver on time and within budget, minimising business disruption throughout the project.</p>
<ul>
  <li>Brand-aligned interior concepts</li>
  <li>Space planning and workflow optimisation</li>
  <li>FF&amp;E (furniture, fixtures &amp; equipment) procurement</li>
  <li>Signage and wayfinding design</li>
  <li>Turnkey fit-out management</li>
</ul>',
                'meta_title'        => 'Commercial Interior Design Services | Space Mystique',
                'meta_description'  => 'Commercial interior design for offices, retail, restaurants, and hospitality by Space Mystique. Brand-driven spaces that perform and impress.',
                'status'            => 'active',
            ],
            [
                'title'             => 'Space Planning & Layout Design',
                'subtitle'          => 'Every Square Foot, Purposefully Placed',
                'short_description' => 'We analyse your space and lifestyle to create intelligent, optimised floor plans that maximise flow, functionality, and comfort — ensuring no square foot goes to waste.',
                'full_description'  => '<p>Great design begins with great planning. Space Mystique\'s space planning service lays the strategic foundation for any interior project — whether you are renovating an existing property or fitting out a brand-new shell.</p>
<p>Our designers study how you move through and use a space, then develop layouts that prioritise natural light, ease of circulation, zoning, and storage. We produce detailed floor plans, furniture layouts, and elevation drawings so you can see exactly how your space will function before a single item is moved or purchased.</p>
<p>Space planning is available as a standalone service or as the first phase of a full interior design engagement.</p>
<ul>
  <li>Measured survey and existing layout analysis</li>
  <li>Multiple layout options with pros and cons</li>
  <li>Furniture and fixture placement drawings</li>
  <li>Storage and built-in joinery planning</li>
  <li>Traffic flow and accessibility review</li>
</ul>',
                'meta_title'        => 'Space Planning & Layout Design | Space Mystique',
                'meta_description'  => 'Strategic space planning and layout design by Space Mystique. Optimised floor plans that maximise functionality, flow, and natural light for any property.',
                'status'            => 'active',
            ],
            [
                'title'             => 'Interior Styling & Décor',
                'subtitle'          => 'The Art of the Finishing Touch',
                'short_description' => 'Our interior styling service layers texture, colour, art, and accessories to give your home its soul — bringing a curated, editorial quality to every corner without a full renovation.',
                'full_description'  => '<p>Sometimes a space just needs to be brought to life. Interior styling is the art of selecting and arranging furnishings, soft goods, plants, artwork, and objects to create an atmosphere that feels both intentional and inviting.</p>
<p>Space Mystique offers styling as a standalone service ideal for newly built homes, recently renovated spaces, property listings preparing for sale, or any room that needs a refresh. We shop your existing pieces alongside new acquisitions, ensuring a cohesive look that feels personal rather than showroom-perfect.</p>
<p>Our stylists work swiftly and decisively, delivering a transformed space — often within a single day.</p>
<ul>
  <li>Colour and texture consultation</li>
  <li>Soft furnishing and cushion curation</li>
  <li>Art sourcing and wall styling</li>
  <li>Plant and greenery placement</li>
  <li>Bookshelf, shelf, and surface styling</li>
  <li>Property staging for real estate photography</li>
</ul>',
                'meta_title'        => 'Interior Styling & Décor Services | Space Mystique',
                'meta_description'  => 'Professional interior styling and décor by Space Mystique. Curated art, accessories, and soft furnishings that bring personality and polish to any space.',
                'status'            => 'active',
            ],
            [
                'title'             => '3D Visualisation & Rendering',
                'subtitle'          => 'See Your Space Before It Exists',
                'short_description' => 'We produce photorealistic 3D renders and immersive virtual walkthroughs of your interior design, letting you experience and refine your space with complete confidence before any work begins.',
                'full_description'  => '<p>Making design decisions is far easier when you can see the outcome in advance. Space Mystique\'s 3D visualisation service turns design concepts into photorealistic images and interactive walkthroughs, removing guesswork and ensuring alignment between client and designer.</p>
<p>Our renders capture accurate lighting conditions, material finishes, furniture proportions, and spatial atmosphere — giving you a true sense of how your completed interior will look and feel. This service is invaluable for making confident selections on expensive finishes and custom pieces.</p>
<p>Visualisations are also ideal for developer and contractor briefs, investor presentations, and marketing materials.</p>
<ul>
  <li>High-resolution still renders (day and evening lighting)</li>
  <li>360° panoramic views</li>
  <li>Virtual walkthrough videos</li>
  <li>Material and finish comparison renders</li>
  <li>CGI for marketing and pre-sales</li>
</ul>',
                'meta_title'        => '3D Interior Visualisation & Rendering | Space Mystique',
                'meta_description'  => 'Photorealistic 3D interior renders and virtual walkthroughs by Space Mystique. Visualise your design with confidence before construction begins.',
                'status'            => 'active',
            ],
            [
                'title'             => 'Kitchen & Bathroom Design',
                'subtitle'          => 'Functional Beauty Where It Matters Most',
                'short_description' => 'We design kitchens and bathrooms that are both strikingly beautiful and highly functional — bespoke joinery, premium fixtures, intelligent storage, and finishes that stand the test of daily life.',
                'full_description'  => '<p>Kitchens and bathrooms are the hardest-working rooms in any home, and they deserve design that rises to the challenge. Space Mystique combines ergonomic planning with refined aesthetics to deliver spaces that function effortlessly and look extraordinary.</p>
<p>For kitchens, we develop custom cabinetry layouts, specify appliances, select stone benchtops, taps, sinks, and splashbacks, and design integrated storage solutions. For bathrooms, we handle everything from wet area layouts and waterproofing requirements to vanity design, tile selection, fittings, and lighting.</p>
<p>We liaise directly with cabinet makers, plumbers, tilers, and electricians to ensure flawless execution.</p>
<ul>
  <li>Custom cabinetry and joinery design</li>
  <li>Stone, tile, and material selection</li>
  <li>Fixture and fitting specification</li>
  <li>Appliance integration planning</li>
  <li>Wet area and waterproofing coordination</li>
  <li>Trade and contractor management</li>
</ul>',
                'meta_title'        => 'Kitchen & Bathroom Interior Design | Space Mystique',
                'meta_description'  => 'Bespoke kitchen and bathroom design by Space Mystique. Custom joinery, premium fixtures, and intelligent layouts for spaces that perform as beautifully as they look.',
                'status'            => 'active',
            ],
            [
                'title'             => 'Lighting Design',
                'subtitle'          => 'Set the Mood. Shape the Space.',
                'short_description' => 'Our lighting design service layers ambient, task, and accent light to sculpt atmosphere, highlight architecture, and make every room feel exactly as it should — at any hour of the day.',
                'full_description'  => '<p>Lighting is the single most powerful tool in an interior designer\'s toolkit. Done well, it can make a small room feel expansive, a plain ceiling feel dramatic, and a simple material look luxurious. Space Mystique treats lighting as an architectural element — not an afterthought.</p>
<p>We develop comprehensive lighting plans that define zones, specify fixture types, plan switch and dimmer placements, and work alongside electricians during installation. We balance natural and artificial light, integrate smart-home dimming systems, and ensure energy efficiency without compromising ambience.</p>
<ul>
  <li>Layered lighting concept (ambient, task, accent, decorative)</li>
  <li>Fixture selection and specification</li>
  <li>Lighting control and smart-home integration</li>
  <li>Electrical layout drawings for contractors</li>
  <li>Daylighting and window treatment advice</li>
  <li>Energy efficiency and LED specification</li>
</ul>',
                'meta_title'        => 'Interior Lighting Design Services | Space Mystique',
                'meta_description'  => 'Expert interior lighting design by Space Mystique. Layered ambient, task, and accent lighting plans that set the perfect mood in every room.',
                'status'            => 'active',
            ],
            [
                'title'             => 'Project Management & Fit-Out',
                'subtitle'          => 'Seamless Execution, Start to Finish',
                'short_description' => 'We take complete ownership of your project — coordinating contractors, managing timelines, controlling budgets, and quality-checking every stage — so your vision is delivered on time and without the stress.',
                'full_description'  => '<p>Even the most beautiful design can fall apart without disciplined execution. Space Mystique\'s project management service ensures your interior project is delivered exactly as designed, on schedule, and within budget — with you kept informed every step of the way.</p>
<p>We act as your single point of contact, sourcing and vetting contractors, writing detailed scopes of work, scheduling trades, conducting site inspections, and resolving issues before they become problems. Our network of trusted builders, joiners, painters, electricians, and plumbers means quality is never compromised.</p>
<ul>
  <li>Contractor sourcing, briefing, and vetting</li>
  <li>Detailed project schedule and milestone tracking</li>
  <li>Budget management and cost reporting</li>
  <li>On-site quality inspections</li>
  <li>Procurement and delivery coordination</li>
  <li>Defect management and handover sign-off</li>
</ul>',
                'meta_title'        => 'Interior Project Management & Fit-Out | Space Mystique',
                'meta_description'  => 'End-to-end interior project management and fit-out services by Space Mystique. We coordinate every trade and supplier so your design is delivered flawlessly.',
                'status'            => 'active',
            ],
        ];

        foreach ($services as $service) {
            $service['slug'] = Str::slug($service['title']);
            Service::create($service);
        }
    }
}
