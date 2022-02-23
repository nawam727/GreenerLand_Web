function validateform()
{
    if(document.cform.name.value.length==0)
    {
        window.alert("please enter your name");
        return;
    }
    if(document.cform.email.value.length==0)
    {
        window.alert("please enter your email");
        return;
    }
    if(document.cform.contact.value.length==0)
    {
        window.alert("please enter your contact");
        return;
    }
    if(document.cform.message.value.length==0)
    {
        window.alert("please enter your message");
        return;
    }
}