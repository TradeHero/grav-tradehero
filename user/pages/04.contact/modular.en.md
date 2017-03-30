---
title: 'TradeHero ~ Contact'
content:
    items: '@self.modular'
    order:
        by: default
        dir: asc
        custom:
            - _contact
menu: Contact
onpage_menu: true
body_classes: "modular header-lite fullwidth"
header_class: alt
form:
    name: contact
    action: /contact
    fields:
        - name: name
          label: Name
          classes: form-control form-control-lg
          placeholder: Enter your name
          autofocus: on
          autocomplete: on
          type: text
          validate:
            required: true

        - name: email
          id: email
          label: Email
          classes: form-control form-control-lg
          placeholder: Enter your email address
          type: email
          validate:
            required: true

        - name: message
          label: Message
          classes: form-control form-control-lg
          placeholder: Enter your message
          type: textarea
          validate:
            required: true

        - name: g-recaptcha-response
          label: Captcha
          type: captcha
          classes: form-control form-control-lg
          recaptcha_site_key: '6Lfk5RoUAAAAAMJgnrIjVQchNQuYzH9jxXIbr8gN'
          recaptcha_not_validated: 'Captcha not valid!'
          validate:
            required: true

    buttons:
        - type: submit
          value: Submit
          classes: btn btn-primary

    process:
        - captcha:
            recaptcha_secret: '6Lfk5RoUAAAAAL_tWXGnBeunShYRSYpJqGdM_W-r'
        - email:
            subject: "[TradeHero Website Form] {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
        - save:
            fileprefix: contact-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
        - message: THANK YOU FOR YOUR FEEDBACK!
        - display: thankyou
---

