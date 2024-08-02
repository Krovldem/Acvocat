from ru.iamlukovkin.acvocat.application import Application


class TestApplication:

    @staticmethod
    def test_main():
        result = Application.main()
        assert result == 0
