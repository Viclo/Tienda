import { BaseOptions } from './BaseOptions';
import ActiveFilter from 'http://127.0.0.1:8000/adminlte/ActiveFilter';
export interface Options extends BaseOptions {
    filter: ActiveFilter;
}
