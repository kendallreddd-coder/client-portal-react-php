import React from 'react';
export function InvoiceList({ invoices }) {
  return (
    <ul className="divide-y divide-gray-200">
      {invoices.map(inv => (
        <li key={inv.id} className="py-4 flex justify-between">
          <span>{inv.number}</span>
          <a href={inv.downloadUrl} className="text-blue-600">Download PDF</a>
        </li>
      ))}
    </ul>
  );
}
