from django.urls import path

from . import views

urlpatterns = [
    path("", views.index, name="index"),
    path('send-request/', views.send_request, name='send_request')
]