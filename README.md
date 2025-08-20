# Woburn Hydrogeology Data

A comprehensive resource for the Woburn Massachusetts groundwater contamination site featured in the best-selling book "A Civil Action" by Jonathan Harr and the Hollywood movie by the same name.

## About

This repository contains a comprehensive collection of data, reports, maps, and documentation related to the Woburn groundwater contamination site. The site was originally developed as a resource for students in CE En 647 - Ground Water Modeling taught by Dr. Norm Jones at Brigham Young University.

## Features

- **Complete Documentation**: Comprehensive coverage of all aspects of the Woburn site
- **Interactive Navigation**: Easy-to-use navigation through different data categories
- **Search Functionality**: Full-text search across all content
- **Responsive Design**: Works on desktop and mobile devices
- **Dark/Light Mode**: Toggle between different color schemes

## Site Organization

The repository is organized into the following main sections:

- **[Home](docs/index.md)** - Welcome and overview
- **[Brief History](docs/briefhistory.md)** - Background information about the Woburn site
- **[Virtual Tour](docs/tour/index.md)** - Interactive tour of the site
- **[Well Logs](docs/welllogs/index.md)** - Well log data and documentation
- **[GeoTrans](docs/geotrans/index.md)** - GeoTrans analysis and data
- **[Digital Maps](docs/maps/index.md)** - Digital mapping resources
- **[Precipitation Data](docs/precip/index.md)** - Rainfall and precipitation data
- **[USGS Study](docs/usgs/index.md)** - US Geological Survey study materials
- **[NUS Data](docs/nus/index.md)** - NUS Corporation report and data
- **[Photo Gallery](docs/photos/index.md)** - Photographic documentation
- **[Links](docs/links.md)** - Additional resources and references

## Getting Started

### Prerequisites

- Python 3.7 or higher
- pip (Python package installer)

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/njones61/woburn.git
   cd woburn
   ```

2. Install the required dependencies:
   ```bash
   pip install -r requirements.txt
   ```

3. Serve the documentation locally:
   ```bash
   mkdocs serve
   ```

4. Open your browser and navigate to `http://127.0.0.1:8000`

### Building for Production

To build the static site for production:

```bash
mkdocs build
```

The built site will be in the `site/` directory.

## Development

### Adding Content

1. Edit the markdown files in the `docs/` directory
2. The site will automatically reload when you make changes (if using `mkdocs serve`)
3. Commit and push your changes

### Customizing the Theme

Edit the `mkdocs.yml` file to customize:
- Site name and description
- Navigation structure
- Theme colors and features
- Markdown extensions

## Acknowledgments

Special thanks to all the individuals and organizations that provided the data on this site:

- Ronald St. John
- US Environmental Protection Agency
- US Geological Survey
- Jack Guswas, GeoTrans
- Oscar Soule, Evergreen State College
- John Drobinski
- Scott Bair, Ohio State University

## Contributing

This repository is maintained by **Norm Jones** of the Environmental Modeling Research Laboratory of Brigham Young University. 

If you have any comments, suggestions, or additional data, please contact me at: njones@byu.edu.

## License

This project is open source and available under the [MIT License](LICENSE).

## Related Repositories

- [Excel VBA Primer](https://github.com/njones61/vbaprimer) - Excel VBA documentation
- [CE 547 Groundwater Modeling](https://github.com/njones61/ce547) - Groundwater modeling course materials

---

*Page last edited: 12/02/2013*
