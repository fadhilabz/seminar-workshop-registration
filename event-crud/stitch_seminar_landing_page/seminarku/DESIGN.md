---
name: SeminarKu
colors:
  surface: '#f0fbff'
  surface-dim: '#d0dce0'
  surface-bright: '#f0fbff'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#eaf6fa'
  surface-container: '#e4f0f4'
  surface-container-high: '#deeaee'
  surface-container-highest: '#d9e5e8'
  on-surface: '#121d20'
  on-surface-variant: '#44474d'
  inverse-surface: '#273235'
  inverse-on-surface: '#e7f3f7'
  outline: '#74777d'
  outline-variant: '#c4c6cd'
  surface-tint: '#4d6079'
  primary: '#000917'
  on-primary: '#ffffff'
  primary-container: '#0d2137'
  on-primary-container: '#7689a4'
  inverse-primary: '#b5c8e5'
  secondary: '#006876'
  on-secondary: '#ffffff'
  secondary-container: '#92edff'
  on-secondary-container: '#006d7b'
  tertiary: '#000c07'
  on-tertiary: '#ffffff'
  tertiary-container: '#00261c'
  on-tertiary-container: '#009a79'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#d2e4ff'
  primary-fixed-dim: '#b5c8e5'
  on-primary-fixed: '#081c32'
  on-primary-fixed-variant: '#364860'
  secondary-fixed: '#9eefff'
  secondary-fixed-dim: '#77d4e5'
  on-secondary-fixed: '#001f24'
  on-secondary-fixed-variant: '#004e59'
  tertiary-fixed: '#65fbcf'
  tertiary-fixed-dim: '#40deb3'
  on-tertiary-fixed: '#002117'
  on-tertiary-fixed-variant: '#00513e'
  background: '#f0fbff'
  on-background: '#121d20'
  surface-variant: '#d9e5e8'
typography:
  headline-xl:
    fontFamily: Montserrat
    fontSize: 48px
    fontWeight: '700'
    lineHeight: '1.1'
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: Montserrat
    fontSize: 32px
    fontWeight: '700'
    lineHeight: '1.2'
    letterSpacing: -0.01em
  headline-lg-mobile:
    fontFamily: Montserrat
    fontSize: 24px
    fontWeight: '700'
    lineHeight: '1.2'
  headline-md:
    fontFamily: Montserrat
    fontSize: 24px
    fontWeight: '600'
    lineHeight: '1.3'
  body-lg:
    fontFamily: Montserrat
    fontSize: 18px
    fontWeight: '400'
    lineHeight: '1.6'
  body-md:
    fontFamily: Montserrat
    fontSize: 16px
    fontWeight: '400'
    lineHeight: '1.5'
  label-lg:
    fontFamily: Montserrat
    fontSize: 14px
    fontWeight: '600'
    lineHeight: '1.2'
  label-md:
    fontFamily: Montserrat
    fontSize: 12px
    fontWeight: '500'
    lineHeight: '1.2'
rounded:
  sm: 0.25rem
  DEFAULT: 0.5rem
  md: 0.75rem
  lg: 1rem
  xl: 1.5rem
  full: 9999px
spacing:
  base: 8px
  container-max: 1280px
  gutter: 24px
  margin-mobile: 16px
  margin-desktop: 48px
---

## Brand & Style
The design system for this platform is built on a foundation of professional reliability and academic clarity. It aims to evoke a sense of organized, high-value learning for a target audience of professionals, students, and event organizers. 

The aesthetic follows a **Corporate / Modern** style, characterized by structured layouts, ample whitespace, and a high-contrast color palette that guides the user through the registration funnel. Trust is established through substantial typography and a deliberate use of deep navy surfaces contrasted against vibrant teal and seafoam accents. Interactive elements are softened with consistent rounding to maintain approachability despite the professional subject matter.

## Colors
The palette is designed to create a clear hierarchy between administrative structure and actionable discovery.

- **Primary (Navy - #0D2137):** Used for deep backgrounds, headers, and primary text to establish authority and grounding.
- **Secondary (Teal - #028090):** Applied to supporting navigational elements, icons, and secondary buttons.
- **Primary Action (Seafoam - #02C39A):** Reserved exclusively for high-priority calls to action (CTAs), such as "Register Now" or "Complete Payment," ensuring maximum visibility.
- **Surface/Background (Light - #E8F4F8):** Used for page backgrounds and subtle section backgrounds to reduce eye strain and provide a clean canvas.
- **White (#FFFFFF):** Utilized for card surfaces and input containers to lift content off the tinted background.

## Typography
The system utilizes **Montserrat** for all roles to achieve a unified, modern, and geometric feel. 

- **Headlines:** Use heavy weights (700) and tight letter-spacing to create a strong visual impact for seminar titles and section headers. 
- **Body Text:** Use a 1.5 to 1.6 line-height ratio to ensure legibility during long reads of seminar descriptions.
- **Labels:** Small caps or uppercase transforms are encouraged for labels and metadata (e.g., date, category) to distinguish them from body content.

## Layout & Spacing
This design system uses a **Fluid Grid** model with a maximum container width of 1280px.

- **Rhythm:** All spacing (padding, margins, gaps) must be multiples of the 8px base unit.
- **Grid:** A 12-column grid is used for desktop, 6-column for tablet, and 2-column for mobile devices.
- **Desktop:** 48px outer margins with 24px gutters provide a spacious, premium feel.
- **Mobile:** Margins scale down to 16px to maximize content area. Card-based layouts should use 16px internal padding.

## Elevation & Depth
The system utilizes **Tonal Layers** rather than heavy shadows to maintain a clean, modern appearance.

- **Level 0 (Base):** Light (#E8F4F8) background.
- **Level 1 (Cards/Containers):** White (#FFFFFF) surfaces with a very soft, subtle 5% opacity Navy shadow (blur 12px) to distinguish them from the background.
- **Level 2 (Interactive/Hover):** When a user hovers over a seminar card or button, the elevation increases slightly with a 10% opacity shadow and a 2px upward translation.
- **Outlines:** Low-contrast 1px borders in #D1E4EB are used on input fields and inactive states to maintain structure without adding visual noise.

## Shapes
In alignment with the "rounded-xl" requirement, the shape language is friendly and contemporary.

- **Default Radius:** 0.5rem (8px) for small components like checkboxes and small buttons.
- **Large Radius (rounded-lg):** 1rem (16px) for standard buttons and input fields.
- **Extra Large Radius (rounded-xl):** 1.5rem (24px) for cards, modal containers, and large image wrappers.

## Components
- **Buttons:** 
  - *Primary:* Seafoam (#02C39A) with Navy text for maximum contrast. 
  - *Secondary:* Teal (#028090) with White text.
  - *States:* All buttons include a 200ms ease-in-out transition for background-color and transform (scale 0.98 on click).
- **Cards (Seminar):** 24px corner radius, White background, containing a top-aligned image and 24px internal padding for text metadata.
- **Input Fields:** White background with a 1px Navy (10% opacity) border. On focus, the border transitions to Teal (#028090) with a subtle 2px outer glow.
- **Chips/Badges:** Used for seminar categories. Small (12px font), Navy background with White text, or light Teal tint with Teal text.
- **Progress Steppers:** For the registration flow, use a thin Navy line with Teal circular nodes to indicate steps.
- **Lists:** Clean rows with 1px Light-Navy dividers. Interaction should highlight the entire row with a subtle Seafoam-tinted background.