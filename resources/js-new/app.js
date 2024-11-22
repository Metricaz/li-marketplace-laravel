import BrandsSection from './components/BrandsSection';
import Filter from './components/Filter';
import ProductGallery from './components/ProductGallery';
import Search from './components/Search';
import TopOffers from './components/TopOffers';

const brandsSection = new BrandsSection();
brandsSection.init();

const filter = new Filter();
filter.init();

const search = new Search();
search.init();

const productGallery = new ProductGallery();
productGallery.init();

const topOffers = new TopOffers();
topOffers.init();
