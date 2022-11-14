# Theme

- [Header](#header)
    - [Header Search](#headersearch)
- [Content](#content)
    - [Content Hero](#contenthero)
- [Shortcode](#shortcode)
    - [Theme Data](#themedatashortcode)

## Header
You can customize header from the section "Header" into the customizer

### Header Search
You can add an icon for Search in Wordpress. Click on it, a overlay with searchbox will appear over the website.
You can customize the position of icon on header (choosing right - or left for centerer Logo Header) in Customizer.

# Content

### Content Hero
You can easily customize the Hero Section, available only in the Home Page, by the Content > Hero in the Customizer. If you compile the Title field, the Hero will be displayed, else it will be hidden.


## Shortcode

### Theme Data Shortcode
You can print data getted from Theme Customizer with a shortcode.
If name arguments not passed it will return the email field. Otherwise if you pass (for example Twitter field, named atw_contacts_tw) it will return the Twitter URL field. 

This in the Example:

        [themedata name="atw_contacts_tw"]

If you need to retrive the field name of some Customizer's field you can *inspect* code with your Browser and get name field from the attribute **data-customize-setting-link**.