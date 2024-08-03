from django.test import TestCase
from django.shortcuts import render
from .views import PageViewsResolver

class PagesTest(TestCase):
    view_resolver: PageViewsResolver = PageViewsResolver()
    def test_homepage(self):
        # arrange
        test_render = render(request, 'index.html', {})

