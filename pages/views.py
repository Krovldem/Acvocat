from django.shortcuts import render
from django.http import HttpResponseRedirect
from .forms import RequestForm
from django.views.decorators.cache import cache_page
from django.views.decorators.csrf import csrf_protect
from email_service.controller import RequestController
from email_service.service import MailService
from email_service.models import RequestDto
from django.conf import settings
import dotenv


@cache_page(60 * 15)
@csrf_protect
def index(request):
    return render(request, "index.html")


@cache_page(60 * 15)
@csrf_protect
def send_request(request):
    if request.method == "POST":
        form = RequestForm(request.POST)
        if form.is_valid():
            service: MailService = MailService(
                dotenv.get_key(settings.DOTENV_PATH, "ADMIN_MAIL"),
                dotenv.get_key(settings.DOTENV_PATH, "ADMIN_KEY")
            )
            RequestController(service, dotenv.get_key(settings.DOTENV_PATH, "OWNER_MAIL")).send_email(RequestDto(
                topic=form.data['full_name'],
                body=form.data['description'],
                phone_number=form.data['phone_number'],
                email=form.data['mail']
            ))
            return HttpResponseRedirect("/")
    else:
        form = RequestForm()
    print()
    return render(request, "index.html", {"form": form})
