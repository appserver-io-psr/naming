# Version 1.0.5

## Bugfixes

* None

## Features

* Switch to latest appserver-io/rmi version

# Version 1.0.4

## Bugfixes

* None

## Features

* Switch to latest appserver-io/properties version

# Version 1.0.3

## Bugfixes

* None

## Features

* Switch to RMI version 2.0.0

# Version 1.0.2

## Bugfixes

* Refactoring session initialization to allow late binding necessary necessary for starting/querying session within the same request

## Features

* None

# Version 1.0.1

## Bugfixes

* Fixed some minor comment glitches

## Features

* None

# Version 1.0.0

## Bugfixes

* None

## Features

* Switched to stable dependencies due to version 1.0.0 release

# Version 0.2.1

## Bugfixes

* None

## Features

* Moving InitialContext, ResourceIdentifier + EnterpriseBeanResourceIdentifier classes from appserver-io/appserver package

# Version 0.2.0

## Bugfixes

* None

## Features

* Unified the interface naming conventions
* Moved to new documentation schema

# Version 0.1.8

## Bugfixes

* None

## Features

* Enhance NamingDirectory functionality with recursive bind/search functionality

# Version 0.1.7

## Bugfixes

* None

## Features

* Add session-ID, necessary for lookup stateful session beans SFBs, to lookup() and sibling methods

# Version 0.1.6

## Bugfixes

* None

## Features

* Add NamingDirectory and NamingDirectoryInterface

# Version 0.1.5

## Bugfixes

* Allow specification of default transport protocol for remote lookup handling => defaults to HTTP now

## Features

* None

# Version 0.1.4

## Bugfixes

* Allow a minus char (-) in context name when parsing naming directory identifier passed to InitialContext::prepareResourceIdentifier() method

## Features

* None

# Version 0.1.3

## Bugfixes

* None

## Features

* Using nikic/phlexy as lexer for parsing JNDI style bean names in InitialContext::lookup() method

# Version 0.1.2

## Bugfixes

* None

## Features

* Switching to from ResourceIdentifier => EnterpriseBeanResourceIdentifier for InitialContext::lookup() method

# Version 0.1.1

## Bugfixes

* None

## Features

* Switching to new techdivision/persistencecontainer version > 0.7

# Version 0.1.0

## Bugfixes

* None

## Features

* Initial Release
