from django.shortcuts import render


class PageViewsResolver:
    @staticmethod
    def homepage(request):
        return render(request, 'index.html', {})
