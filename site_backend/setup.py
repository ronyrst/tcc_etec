# exemplo

requires = [
    'flask',
    'flask-sqlalchemy',
    'psycopg2',
]
 
setup(
    name='flask_todo',
    version='0.0',
    description='A To-Do List built with Flask',
    author='<Your actual name here>',
    author_email='<Your actual e-mail address here>',
    keywords='web flask',
    packages=find_packages(),
    include_package_data=True,
    install_requires=requires
)