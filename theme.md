# Theme

- [Header](#header)
    - [Header Search](#headersearch)
- [Content](#content)
    - [Content Hero](#contenthero)
- [Social Navigation](#socialnavigation)
    - [Whatsapp Call to Action](whatsappcalltoaction)
- [Shortcode](#shortcode)
    - [Theme Data](#themedatashortcode)
    - [Alert](#alertshortcode)

## Header
You can customize header from the section "Header" into the customizer

### Header Search
You can add an icon for Search in Wordpress. Click on it, a overlay with searchbox will appear over the website.
You can customize the position of icon on header (choosing right - or left for centerer Logo Header) in Customizer.

# Content

### Content Hero
You can easily customize the Hero Section, available only in the Home Page, by the Content > Hero in the Customizer. If you compile the Title field, the Hero will be displayed, else it will be hidden.

# Social Navigation
You can customize your Social Network from the Customizer (section Contacts) and it will be displayed in the Social Navigation.
You can a toggle display button in the Header using the Customizer's field with label "Show Social Nav in Header". If there is no one social network inputed into che Customizer, the toggle button will be displayed but Social Navigation will be hidden.

### Whatsapp Call to Action
You can display an icon with direct link to your Whatsapp number in the Customizer at the section ***Contacts > Show Whatsapp Call to Action***

## Shortcode

### Theme Data Shortcode
You can print data getted from Theme Customizer with a shortcode.
If name arguments not passed it will return the email field. Otherwise if you pass (for example Twitter field, named atw_contacts_tw) it will return the Twitter URL field. 

This in the Example:

        [themedata name="atw_contacts_tw"]

If you need to retrive the field name of some Customizer's field you can *inspect* code with your Browser and get name field from the attribute **data-customize-setting-link**.

### Alert Shortcode
You can display an alert using a shortcode. You can customize type (info, success, warning, danger) passing the type as a parameter. 

This in the Example:

        [alert type="warning"]Your message in alert...[/alert]
