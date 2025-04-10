import BrandsSection from './components/BrandsSection';
import OrderCategory from './components/OrderCategory';
import TopBarSearch from './components/TopBarSearch';
import PerPageCategory from './components/PerPageCategory';
import Filter from './components/Filter';
import ProductGallery from './components/ProductGallery';
import Search from './components/Search';
import TopOffers from './components/TopOffers';
import Datalayer from './components/Datalayer';

const brandsSection = new BrandsSection();
brandsSection.init();

const orderCategory = new OrderCategory();
orderCategory.init();

const topBarSearch = new TopBarSearch();
topBarSearch.init();

const perPageCategory = new PerPageCategory();
perPageCategory.init();

const filter = new Filter();
filter.init();

const search = new Search();
search.init();

const productGallery = new ProductGallery();
productGallery.init();

const topOffers = new TopOffers();
topOffers.init();

const datalayer = new Datalayer();
datalayer.init();