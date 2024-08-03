from ru.iamlukovkin.path_resolver import PathResolver


class TestPathResolver:

    @staticmethod
    def test_return_path():
        assert type(PathResolver.get_project_path()) == str
