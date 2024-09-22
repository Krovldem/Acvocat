from django import forms


class RequestForm(forms.Form):

    full_name = forms.CharField(label="ФИО", max_length=100, required=True)
    mail = forms.EmailField(label="email_service", required=True)
    phone_number = forms.CharField(max_length=20, label="Номер телефона", required=True)
    description = forms.Textarea()
